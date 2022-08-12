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
		
		$this->load->view('user/v_header', $data);
		$this->load->view('user/v_navbar');
		$this->load->view('user/v_sidebar');
		$this->load->view('user/v_informasi');
		$this->load->view('user/v_footer');
	}
}