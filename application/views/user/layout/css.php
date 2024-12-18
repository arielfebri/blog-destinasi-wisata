<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
<link rel="icon" type="image/png" href="<?= base_url('assets/front/')?>images/icons/favicon.png" />
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/front/')?>vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css"
	href="<?= base_url('assets/front/')?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css"
	href="<?= base_url('assets/front/')?>fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/front/')?>fonts/linearicons-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/front/')?>vendor/animate/animate.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/front/')?>vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/front/')?>vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/front/')?>vendor/select2/select2.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/front/')?>vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/front/')?>vendor/slick/slick.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/front/')?>vendor/MagnificPopup/magnific-popup.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css"
	href="<?= base_url('assets/front/')?>vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/front/')?>css/util.css">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/front/')?>css/main.css">
<!--===============================================================================================-->
<!-- CSS only -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Leaflet CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
<style>
	#map {
		height: 500px;
		width: 100%;
	}

</style>
<style>
	.lihat-lokasi {
		font-size: 16px;
		text-decoration: none;
		color: #007bff;
		/* Warna biru */
		font-weight: bold;
	}

	.lihat-lokasi:hover {
		color: #0056b3;
		/* Warna biru lebih gelap saat hover */
		text-shadow: 2px 2px 5px gray;
	}

	.lihat-lokasi i {
		margin-right: 5px;
		/* Jarak antara ikon dan teks */
		color: red;
		/* Warna ikon peta */
	}

</style>

<style>
	/* CSS tambahan untuk memastikan modal tampil di atas */
	.modal {
		z-index: 1050 !important;
		/* Modal memiliki z-index yang lebih tinggi dari elemen lainnya */
	}

	.modal-backdrop {
		z-index: 1040 !important;
		/* Z-index backdrop modal */
	}

	/* Jika ada sidebar, pastikan sidebar memiliki z-index lebih rendah dari modal */
	.sidebar {
		z-index: 1000 !important;
		/* Pastikan sidebar berada di bawah modal */
	}

</style>
<style>
	.modal-dialog {
		max-width: 600px;
		/* Atur lebar modal */
		margin-top: 100px;
	}

</style>
