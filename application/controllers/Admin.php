<?php
defined('BASEPATH') or exit('No direct script access allowed');

$n = 1;

class Admin extends CI_Controller
{

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
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$user = $this->db->get_where('registrasi', ['email' => $email])->row();

		if ($user) {
			if (password_verify($password, $user->password)) {

				$data = [
					'email' 	=> $user->email,
					'role'		=> 'admin',
					'nama'		=> $user->nama_lengkap,
					'no_hp'		=> $user->no_hp
				];
				$this->session->set_userdata($data);

				redirect('page_mobilaja');
			} else {
				alerterror('message', 'Password salah');
				redirect('page_mobilaja/login');
			}
		} else {
			alerterror('message', 'Email tidak ditemukan');
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
			'provinsi'			=> $this->input->post('provinsi', true),
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
		$this->db->order_by('tanggal', 'DESC');
		$data['iklan'] = $this->db->get_where('info_iklan', array('email'=>$this->session->userdata('email')))->result();
		$this->load->view('pagemobilaja/headerlogin');
		$this->load->view('pagemobilaja/iklan', $data);
	}

	public function iklan_add()
	{
		is_admin();

		if (!empty($_FILES['foto_kendaraan']['name'])) {
			$foto_kendaraan = $this->_uploadImage('foto_kendaraan');
		} else {
			$foto_kendaraan = 'default.png';
		}

		if ($this->form_validation->run('iklan') == false) {
			$this->load->view('pagemobilaja/headerlogin');
			$this->load->view('pagemobilaja/create_iklan');
		} else {
			$data = [
				'info'  					=> $this->input->post('info'),
				'kondisi_kendaraan'  		=> $this->input->post('kondisi_kendaraan'),
				'tahun_kendaraan'  			=> $this->input->post('tahun_kendaraan'),
				'kilometer_kendaraan'  		=> $this->input->post('kilometer_kendaraan'),
				'jenis_bahanbakar'  		=> $this->input->post('jenis_bahanbakar'),
				'warna'  					=> $this->input->post('warna'),
				'harga'  					=> $this->input->post('harga'),
				'deskripsi'   				=> $this->input->post('deskripsi'),
				'nama'   					=> $this->input->post('nama'),
				'email'   					=> $this->input->post('email'),
				'nomor_person'   			=> $this->input->post('nomor_person'),
				'tanggal'					=> date('Y-m-d'),
				'foto_kendaraan'			=> $foto_kendaraan,
			];
			$this->db->insert('info_iklan', $data);
			alertsuccess('message', 'Data berhasil ditambahkan');
			redirect('admin/iklan');
		}
	}

	public function iklan_edit($id)
	{
		is_admin();
		if ($this->form_validation->run('career') == false) {

			$data['career'] = $this->db->get_where('info_loker', ['id' => $id])->row();
			$this->load->view('header');
			$this->load->view('page/admin/edit_career', $data);
			$this->load->view('footer');
		} else {
			$data = [
				'info'  		=> $this->input->post('info'),
				'perusahaan'    => $this->input->post('perusahaan'),
				'tanggal_akhir' => $this->input->post('tgl_akhir'),
				'tanggal'   	=> date('Y-m-d'),
			];
			$this->db->update('info_loker', $data, ['id' => $id]);
			alertsuccess('message', 'Data berhasil diubah');
			redirect('admin/career');
		}
	}

	public function iklan_del($id)
	{
		is_admin();
		$this->db->delete('info_loker', ['id' => $id]);

		alertsuccess('message', 'Data berhasil dihapus');
		redirect('admin/career');
	}

	public function profil()
	{
		$data['profile'] = $this->db->get_where('registrasi', ['email' => $this->session->userdata('email')])->row();
		$this->load->view('pagemobilaja/headerlogin');
		$this->load->view('pagemobilaja/profile', $data);
	}


	public function uploadcv()
	{
		if (!empty($_FILES['cv']['name'])) {
			$cv = $this->_uploadImage('cv');
		} else {
			$cv = 'default.png';
		}

		$data = [
			'id_loker'		=> $this->input->post('id_loker', true),
			'username'		=> $this->session->userdata('username'),
			'name'			=> $this->input->post('name', true),
			'cv'			=> $cv,
		];

		$this->db->insert('curiculum_vitae', $data);
		alertsuccess('message', 'Data terkirim, mudah bukan?');
		redirect('page');
	}

	
	public function _uploadImage($name)
	{
		mkdir('./assets/img/mobil/'. $this->session->userdata('email'), 0777, TRUE);
		$config['upload_path']          = './assets/img/mobil/'. $this->session->userdata('email');
		$config['allowed_types']        = 'jpg|png';
		$config['file_name']            = time().uniqid();
		$config['overwrite']			= true;
		$config['max_size']             = 1024;
		$GLOBALS['n']++;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload($name)) {
			$filename =  $this->upload->data("file_name");
		} else {
			$filename = 'default.png';
		}
		$data = [
			'image' => $filename,
		];

		return $filename;
	}
}