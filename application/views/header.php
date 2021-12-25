<!DOCTYPE html>
<html>

<head>
	<title>SilokerNF</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/main.css">
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-white">
		<div class="container">
			<a class="navbar-brand" href="<?= base_url('page') ?>"><i class="fas fa-briefcase"></i> SILOKERNF</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('page') ?>">Beranda</a>
					</li>
					<?php if(! $this->session->has_userdata('username')): ?>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('page/registrasi') ?>">Buat Akun</a>
					</li>
					<li class="nav-itme">
						<a class="nav-link" href="<?= base_url('page/login') ?>">Masuk</a>
					</li>
					<?php else: ?>
					<li class="nav-itme">
						<a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
					</li>
					<?php endif; ?>

					<?php if($this->session->has_userdata('username') ):?>
					<?php if(!$this->session->has_userdata('role')): ?>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('pelamar/profil') ?>"> Lihat Profil </a>
					</li>
					<?php endif; ?>
					<li class="nav-item">
						<?php if($this->session->has_userdata('role')): ?>
						<a class="nav-link" href="<?= base_url('admin/career') ?>">Edit Lowongan</a>
						<?php endif;?>
					</li>
					<?php endif; ?>
				</ul>
			</div>
		</div>
	</nav>

	<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<h1 class="display-4 text-center">SILOKERNF</h1>
			<h3 class="display-5 text-center">Sistem Informasi Lowongan Kerja NF.</h3>
		</div>
	</div>

	<div class="container">
