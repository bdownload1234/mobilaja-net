<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page_Mobilaja extends CI_Controller {

	public function index()
	{
		$this->db->order_by('id' ,'DESC');
		$data['iklan'] = $this->db->get('info_iklan')->result();
		$this->load->view('pagemobilaja/header');
		$this->load->view('pagemobilaja/slider');
		$this->load->view('pagemobilaja/home',$data);
		$this->load->view('pagemobilaja/footer');
	}

	public function registrasi()
	{
		$this->load->view('pagemobilaja/header');
		$this->load->view('pagemobilaja/register');
		//$this->load->view('footer');
	}

	public function registrasiadmin()
	{
		$this->load->view('header');
		$this->load->view('page/admin/registrasiadmin');
		$this->load->view('footer');
	}

	public function login()
	{
		$this->load->view('pagemobilaja/header');
		$this->load->view('pagemobilaja/login');
		//$this->load->view('footer');
	}
}
