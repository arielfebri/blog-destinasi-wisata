<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title><?=$judul?></title>

	<!-- css star -->
    <?php require_once('admin/layout/__css.php'); ?>
	<!-- css end -->

</head>

<body>
        <!-- sidebar star -->
        <?php require_once('admin/layout/__sidebar.php'); ?>
		<!-- sidebar end -->
		<!--  konten star -->
		<div class="page-wrapper">
			<div class="content">
				<?php echo $contents ?>
			</div>
		</div>
		<!--  konten end  -->
	</div>

	<!-- js star -->
    <?php require_once('admin/layout/__js.php'); ?>
	<!-- js end -->
</body>

</html>
