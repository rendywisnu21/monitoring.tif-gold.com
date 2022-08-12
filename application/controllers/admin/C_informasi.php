<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class C_informasi extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		error_reporting(0);
	}

    public function index()
	{
		$data['title'] = 'Informasi';
		
		$this->load->view('admin/template_adm/v_header', $data);
		$this->load->view('admin/template_adm/v_navbar');
		$this->load->view('admin/template_adm/v_sidebar');
		$this->load->view('admin/informasi/v_informasi');
		$this->load->view('admin/template_adm/v_footer');
	}
}