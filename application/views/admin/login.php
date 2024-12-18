<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />
	<meta name="description" content="POS - Bootstrap Admin Template" />
	<meta name="keywords"
		content="admin, estimates, bootstrap, business, corporate, creative, invoice, html5, responsive, Projects" />
	<meta name="author" content="Dreamguys - Bootstrap Admin Template" />
	<meta name="robots" content="noindex, nofollow" />
	<title>Login - Pos admin template</title>

	<link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/admin/')?>assets/img/favicon.jpg" />

	<link rel="stylesheet" href="<?= base_url('assets/admin/')?>assets/css/bootstrap.min.css" />

	<link rel="stylesheet" href="<?= base_url('assets/admin/')?>assets/plugins/fontawesome/css/fontawesome.min.css" />
	<link rel="stylesheet" href="<?= base_url('assets/admin/')?>assets/plugins/fontawesome/css/all.min.css" />

	<link rel="stylesheet" href="<?= base_url('assets/admin/')?>assets/css/style.css" />
</head>

<body class="account-page">
	<div class="main-wrapper">
		<div class="account-content">
			<div class="login-wrapper">
				<div class="login-content">
					<div class="login-userset">
						<form action="<?= base_url('admin/auth/login');?>" method="post">
							<div class="login-logo">
								<img src="<?= base_url('assets/admin/')?>assets/img/logo.png" alt="img" />
							</div>
							<div class="login-userheading">
								<h3>Login</h3>
								<h4>Please login to your account</h4>
							</div>
							<?php echo $this->session->flashdata('alert'); ?>
							<div class="form-login">
								<label for="floatingInput" class="sr-only">Username</label>
								<div class="form-addons">
									<input type="text" placeholder="Username" required="" name="username" />
									<img src="<?= base_url('assets/admin/')?>assets/img/icons/users1.svg" alt="img" />
								</div>
							</div>
							<div class="form-login">
								<label for="inputPassword" class="sr-only">Password</label>
								<div class="pass-group">
									<input type="password" class="pass-input" placeholder="Password" required=""
										name="password" />
									<span class="fas toggle-password fa-eye-slash"></span>
								</div>
							</div>
							<div class="form-login">
								<div class="alreadyuser">
									<h4>
										<a href="forgetpassword.html" class="hover-a">Forgot Password?</a>
									</h4>
								</div>
								<button class="btn btn-login" type="submit">Sign In</button>
							</div>

						</form>
					</div>
				</div>
				<div class="login-img">
					<img src="<?= base_url('assets/admin/')?>assets/img/login.jpg" alt="img" />
				</div>
			</div>
		</div>
	</div>

	<script src="<?= base_url('assets/admin/')?>assets/js/jquery-3.6.0.min.js"></script>

	<script src="<?= base_url('assets/admin/')?>assets/js/feather.min.js"></script>

	<script src="<?= base_url('assets/admin/')?>assets/js/bootstrap.bundle.min.js"></script>

	<script src="<?= base_url('assets/admin/')?>assets/js/script.js"></script>
</body>

</html>
