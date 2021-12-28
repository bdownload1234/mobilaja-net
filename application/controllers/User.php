<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
	public function index()
	{
	}

	public function login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$user = $this->db->get_where('registrasi', ['username' => $username])->row();

		if ($user) {
			if (password_verify($password, $user->password)) {
				$data = [
					'username' 	=> $user->username,
				];
				$this->session->set_userdata($data);

				redirect('page');
			} else {
				alerterror('message', 'Password salah');
				redirect('page/login');
			}
		} else {
			alerterror('message', 'Username tidak ditemukan');
			redirect('page/login');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('role');
		alertsuccess('message', 'Logout berhasil');
		redirect('page/login');
	}

	public function registrasi()
	{
		$data = [
			'username'			=> $this->input->post('username', true),
			'password'			=> password_hash($this->input->post('password'), PASSWORD_DEFAULT),
			'nama_lengkap'		=> $this->input->post('nama', true),
			'tgl_lahir'			=> $this->input->post('tgl_lahir', true),
			'domisili'			=> $this->input->post('domisili', true),
			'jenjang_pendidikan' => $this->input->post('jenjang_pendidikan', true),
			'jenis_kelamin'		=> $this->input->post('jk', true),
			'alamat_lengkap'	=> $this->input->post('alamat', true),
			'no_hp'				=> $this->input->post('no_hp', true),
			'tanggal'			=> date('Y-m-d'),
		];

		$this->db->insert('registrasi', $data);

		alertsuccess('message', 'Akun anda berhasil dibuat');
		redirect('page/login');
	}

	public function profil()
	{
		$data['profile'] = $this->db->get_where('registrasi', ['username' => $this->session->userdata('username')])->row();
		$this->load->view('header');
		$this->load->view('page/profile', $data);
		$this->load->view('footer');
	}

	public function update_profile()
	{

		$data = [
			'nama_lengkap'		=> $this->input->post('nama', true),
			'tgl_lahir'			=> $this->input->post('tgl_lahir', true),
			'domisili'			=> $this->input->post('domisili', true),
			'jenjang_pendidikan' => $this->input->post('jenjang_pendidikan', true),
			'jenis_kelamin'		=> $this->input->post('jk', true),
			'alamat_lengkap'	=> $this->input->post('alamat', true),
			'no_hp'				=> $this->input->post('no_hp', true),
			'tanggal'			=> date('Y-m-d'),
		];

		$this->db->update('registrasi', $data, ['username' => $this->session->userdata('username')]);

		alertsuccess('message', 'Berhasil mengupdate profile');
		redirect('pelamar/profil');
	}

	public function apply($id)
	{
		$data['id_loker'] = $id;
		$this->load->view('header');
		$this->load->view('page/career/doc_pelamar', $data);
		$this->load->view('footer');
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

	private function _uploadImage($name)
	{
		mkdir('./assets/img/mobil/' + $this->session->userdata('username'));

		$config['upload_path']          = './assets/img/mobil/' + $this->session->userdata('username');
		$config['allowed_types']        = 'jpg|png';
		$config['file_name']            = time() . uniqid();
		$config['overwrite']			 = true;
		$config['max_size']             = 1024;

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
