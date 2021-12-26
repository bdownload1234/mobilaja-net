<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page_Mobilaja extends CI_Controller {

	public function index()
	{
		$this->db->order_by('id' ,'DESC');
		$data['careers'] = $this->db->get('info_loker')->result();
		$this->load->view('pagemobilaja/header');
		$this->load->view('page/home',$data);
		$this->load->view('pagemobilaja/footer');
	}

	public function registrasi()
	{
		$this->load->view('header');
		$this->load->view('page/registrasi');
		$this->load->view('footer');
	}

	public function registrasiadmin()
	{
		$this->load->view('header');
		$this->load->view('admin/registrasiadmin');
		$this->load->view('footer');
	}

	public function login()
	{
		$this->load->view('header');
		$this->load->view('page/login');
		$this->load->view('footer');
	}
}
