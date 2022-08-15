<?php
class C_riwayat extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if(!isset($_SESSION['auth'])){
			redirect('admin/C_auth');
		}

		$this->load->model('admin/m_riwayat', 'riwayat');
	}

    public function index()
	{
		$data['title'] = 'Riwayat';

		// Mengambil data riwayat
		$data['riwayat'] = $this->riwayat->getRiwayat()->result();
		
		$this->load->view('admin/template_adm/v_header', $data);
		$this->load->view('admin/template_adm/v_navbar');
		$this->load->view('admin/template_adm/v_sidebar');
		$this->load->view('admin/riwayat/v_riwayat');
		$this->load->view('admin/template_adm/v_footer');
	}

	public function hapus()
    {
        $id_riwayat = $this->input->post('delete_id', TRUE);
		$where = array(
            'id_riwayat' => $id_riwayat
        );
		$this->riwayat->hapus($where, 'tb_riwayat');
		$this->session->set_flashdata('message', 'dataDelete');
		redirect('admin/C_riwayat');
    }

	public function clear()
    {
		$riwayat = $this->riwayat->getRiwayat()->result();
		foreach ($riwayat as $rw){
			$id_riwayat = $rw->id_riwayat;
			$where = array(
				'id_riwayat' => $id_riwayat
			);
			$this->riwayat->hapus($where, 'tb_riwayat');
		}
		
		$this->session->set_flashdata('message', 'dataDelete');
		redirect('admin/C_riwayat');
    }
}
