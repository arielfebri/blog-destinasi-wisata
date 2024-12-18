<!DOCTYPE html>
<html lang="en">

<head>
	<title><?=$judul; ?></title>
	<!-- css star -->
	<?php require_once('user/layout/css.php'); ?>
	<!-- css end -->
</head>

<body class="animsition">

	<!-- Header -->
	<header>
		<!-- sidebar star -->
		<?php require_once('user/layout/sidebar.php'); ?>
		<!-- sidebar end -->
	</header>

	<!-- Cart -->
	<div class="page-wrapper">
		<div class="content">
			<?php echo $contents ?>
		</div>
	</div>

	<!-- js star -->
	<?php require_once('user/layout/js.php'); ?>
	<!-- js end -->
	<!-- footer star -->
	<?php require_once('user/layout/footer.php'); ?>
	<!-- footer end -->
</body>

</html>
