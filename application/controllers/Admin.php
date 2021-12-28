<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->library('form_validation');

	}
	public function login()
	{
		$this->load->view('header');
		$this->load->view('page/admin/login');
		$this->load->view('footer');
	}

	public function registrasiadmin()
	{
		$this->load->view('header');
		$this->load->view('page/admin/registrasiadmin');
		$this->load->view('footer');
	}

	public function auth()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$user = $this->db->get_where('admin_login',['username' => $username])->row();

		if($user) {
			if(password_verify($password, $user->password)) {
				
				$data = [
					'username' 	=> $user->username,
					'role'	=> 'admin'
				];
				$this->session->set_userdata($data);

				redirect('page_mobilaja');
			} else {
				alerterror('message','Password salah');
				redirect('page_mobilaja/login');
			}
		} 
		else {
			alerterror('message','Username tidak ditemukan');
			redirect('page_mobilaja/login');
		}
	}

	public function registrasi()
	{
		$data = [
			'email'				=> $this->input->post('email', true),
			'password'			=> password_hash($this->input->post('password'), PASSWORD_DEFAULT),
			'nama_lengkap'		=> $this->input->post('nama', true),
			'tgl_lahir'			=> $this->input->post('tgl_lahir', true),
			'domisili'			=> $this->input->post('domisili', true),
			'no_hp'				=> $this->input->post('no_hp', true),
			'status'			=> $this->input->post('status', true),
			'tanggal'			=> date('Y-m-d'),
		];

		$this->db->insert('registrasi', $data);

		alertsuccess('message', 'Akun anda berhasil dibuat');
		redirect('page/login');
	}

	public function iklan()
	{
		is_admin();
		$this->db->order_by('id','DESC');
		$data['iklan'] = $this->db->get('info_iklan')->result();
		$this->load->view('header');
		$this->load->view('page/admin/career',$data);
		$this->load->view('footer');
	}

	public function iklan_add()
	{
		is_admin();
	    if($this->form_validation->run('career') == false) {
			$this->load->view('header');
	    	$this->load->view('page/admin/create_career');
			$this->load->view('footer');
	    } else {
	      $data = [
	        'info'  		=> $this->input->post('info'),
	        'perusahaan'    => $this->input->post('perusahaan'),
	        'tanggal_akhir' => $this->input->post('tgl_akhir'),
	        'tanggal'   	=> date('Y-m-d'),
	      ];
	      $this->db->insert('info_loker',$data);
	      alertsuccess('message','Data berhasil ditambahkan');
	      redirect('admin/career');
	    }
	}
	public function iklan_edit($id)
	{
		is_admin();
	    if($this->form_validation->run('career') == false) {

	      $data['career'] = $this->db->get_where('info_loker',['id' => $id])->row();
		  $this->load->view('header');
	      $this->load->view('page/admin/edit_career',$data);
		  $this->load->view('footer');
	    
	    } else {
	      $data = [
	        'info'  		=> $this->input->post('info'),
	        'perusahaan'    => $this->input->post('perusahaan'),
	        'tanggal_akhir' => $this->input->post('tgl_akhir'),
	        'tanggal'   	=> date('Y-m-d'),
	      ];
	      $this->db->update('info_loker',$data,['id' => $id]);
	      alertsuccess('message','Data berhasil diubah');
	      redirect('admin/career');
	    }
	}

	public function iklan_del($id)
	{
		is_admin();
		$this->db->delete('info_loker',['id' => $id]);

		alertsuccess('message','Data berhasil dihapus');
		redirect('admin/career');
	}
}
