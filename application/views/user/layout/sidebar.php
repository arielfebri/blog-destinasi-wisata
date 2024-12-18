<!-- Header desktop -->
<div class="container-menu-desktop">
	<!-- Topbar -->
	<div class="wrap-menu-desktop">
		<nav class="limiter-menu-desktop container">

			<!-- Logo desktop -->
			<a href="<?= base_url()?>" class="navbar-brand font-weight-bold text-secondary">
				<span class="text-black" style="font-size: large;"><?= $konfig->judul_website; ?></span>
			</a>

			<!-- Menu desktop -->
			<div class="menu-desktop">
				<ul class="main-menu">
					<?php $menu = $this->uri->segment(1); ?>
					<li class="<?= ($menu == '' || $menu == 'home') ? 'active-menu' : ''; ?>">
						<a href="<?= base_url()?>" style="text-decoration: none;">Home</a>
					</li>

					<li class="<?= ($menu == 'blog') ? 'active-menu' : ''; ?>">
						<a href="<?= base_url('blog')?>" style="text-decoration: none;">Blog</a>
					</li>

					<li class="<?= ($menu == 'about') ? 'active-menu' : ''; ?>">
						<a href="<?= base_url('about')?>" style="text-decoration: none;">About</a>
					</li>

					<li class="<?= ($menu == 'galeri') ? 'active-menu' : ''; ?>">
						<a href="<?= base_url('galeri')?>" style="text-decoration: none;">Galeri</a>
					</li>

				</ul>
			</div>
		</nav>
	</div>
</div>

<!-- Header Mobile -->
<div class="wrap-header-mobile">
	<!-- Logo mobile -->
	<div class="logo-mobile">
		<a href="<?= base_url()?>" class="navbar-brand font-weight-bold text-secondary">
			<span class="text-black" style="font-size: large;"><?= $konfig->judul_website; ?></span>
		</a>
	</div>

	<!-- Button show menu -->
	<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
		<span class="hamburger-box">
			<span class="hamburger-inner"></span>
		</span>
	</div>
</div>

<!-- Menu Mobile -->
<div class="menu-mobile">
	<ul class="main-menu-m">
		<?php $menu = $this->uri->segment(1); ?>
		<li class="<?= ($menu == '' || $menu == 'home') ? 'active-menu' : ''; ?>">
			<a href="<?= base_url()?>" style="text-decoration: none;">Home</a>
		</li>

		<li class="<?= ($menu == 'blog') ? 'active-menu' : ''; ?>">
			<a href="<?= base_url('blog')?>" style="text-decoration: none;">Blog</a>
		</li>

		<li class="<?= ($menu == 'about') ? 'active-menu' : ''; ?>">
			<a href="<?= base_url('about')?>" style="text-decoration: none;">About</a>
		</li>

		<li class="<?= ($menu == 'galeri') ? 'active-menu' : ''; ?>">
			<a href="<?= base_url('galeri')?>" style="text-decoration: none;">Galeri</a>
		</li>

	</ul>
</div>
