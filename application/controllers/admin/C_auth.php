<?php
class C_auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/M_auth', 'auth');
	}

    public function index()
	{
		$this->load->view('admin/v_auth');
	}

	public function login()
	{
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        
        $data = array(
            'username_admin' => $username,
            'password_admin' => md5($password)
        );

        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[2]',
            array(
                'required'      => 'Form Username harus diisi!',
                'min_length'    => 'Isi minimal 2 huruf!'
                )
        );
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]',
            array(
                'required'      => 'Form Password harus diisi!',
                'min_length'    => 'Isi minimal 8 huruf!'
                )
        );

        $auth = $this->auth->get_data($data)->row();

         if ($this->form_validation->run() == FALSE)
            {
                $this->index();
            }
            else if($auth != '')
            {
                $this->session->set_userdata(array(
                    'auth'          => 'login',
                    'id_admin'      => $auth->id_admin,
                    'nama_admin'    => $auth->nama_admin,
                    'role'          => $auth->role
                ));
                redirect('admin/C_dashboard');
            } else {
                $this->session->set_userdata('gagal', 'gagal');
                $this->index();
            }
    }
	
    public function logout()
	{
		$this->session->sess_destroy();
        $this->session->set_userdata('logout', 'logout');
		redirect('user/C_beranda');
    }
}
