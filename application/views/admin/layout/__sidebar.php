<div class="main-wrapper">
	<div class="header">
		<div class="header-left active">
			<a href="<?= base_url(); ?>" class="logo">
				<img src="<?= base_url('assets/admin/')?>assets/img/logo.png" alt="">
			</a>
			<a href="index.html" class="logo-small">
				<img src="<?= base_url('assets/admin/')?>assets/img/logo-small.png" alt="">
			</a>
			<a id="toggle_btn" href="javascript:void(0);"></a>
		</div>

		<a id="mobile_btn" class="mobile_btn" href="#sidebar">
			<span class="bar-icon">
				<span></span>
				<span></span>
				<span></span>
			</span>
		</a>

		<ul class="nav user-menu">
			<li class="nav-item dropdown">
				<a href="javascript:void(0);" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
					<img src="<?= base_url('assets/admin/')?>assets/img/icons/notification-bing.svg" alt="img">
					<span class="badge rounded-pill">4</span>
				</a>
				<div class="dropdown-menu notifications">
					<div class="topnav-dropdown-header">
						<span class="notification-title">Notifications</span>
						<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
					</div>
					<div class="noti-content">
						<ul class="notification-list">
							<li class="notification-message">
								<a href="activities.html">
									<div class="media d-flex">
										<span class="avatar flex-shrink-0">
											<img alt=""
												src="<?= base_url('assets/admin/')?>assets/img/profiles/avatar-02.jpg">
										</span>
										<div class="media-body flex-grow-1">
											<p class="noti-details">
												<span class="noti-title">
													John Doe
												</span>
												added new task
												<span class="noti-title">
													Patient appointment booking
												</span>
											</p>
											<p class="noti-time">
												<span class="notification-time">
													4 mins ago
												</span>
											</p>
										</div>
									</div>
								</a>
							</li>
							<li class="notification-message">
								<a href="activities.html">
									<div class="media d-flex">
										<span class="avatar flex-shrink-0">
											<img alt=""
												src="<?= base_url('assets/admin/')?>assets/img/profiles/avatar-03.jpg">
										</span>
										<div class="media-body flex-grow-1">
											<p class="noti-details">
												<span class="noti-title">
													Tarah Shropshire
												</span>
												changed the task name
												<span class="noti-title">
													Appointment booking with payment gateway
												</span>
											</p>
											<p class="noti-time">
												<span class="notification-time">
													6 mins ago
												</span>
											</p>
										</div>
									</div>
								</a>
							</li>
							<li class="notification-message">
								<a href="activities.html">
									<div class="media d-flex">
										<span class="avatar flex-shrink-0">
											<img alt=""
												src="<?= base_url('assets/admin/')?>assets/img/profiles/avatar-06.jpg">
										</span>
										<div class="media-body flex-grow-1">
											<p class="noti-details">
												<span class="noti-title">
													Misty Tison
												</span>
												added
												<span class="noti-title">
													Domenic Houston
												</span>
												and
												<span class="noti-title">
													Claire Mapes
												</span>
												to project
												<span class="noti-title">
													Doctor available module
												</span>
											</p>
											<p class="noti-time">
												<span class="notification-time">
													8 mins ago
												</span>
											</p>
										</div>
									</div>
								</a>
							</li>
							<li class="notification-message">
								<a href="activities.html">
									<div class="media d-flex">
										<span class="avatar flex-shrink-0">
											<img alt=""
												src="<?= base_url('assets/admin/')?>assets/img/profiles/avatar-17.jpg">
										</span>
										<div class="media-body flex-grow-1">
											<p class="noti-details">
												<span class="noti-title">
													Rolland Webber
												</span>
												completed task
												<span class="noti-title">
													Patient and Doctor video conferencing
												</span>
											</p>
											<p class="noti-time">
												<span class="notification-time">
													12 mins ago
												</span>
											</p>
										</div>
									</div>
								</a>
							</li>
							<li class="notification-message">
								<a href="activities.html">
									<div class="media d-flex">
										<span class="avatar flex-shrink-0">
											<img alt=""
												src="<?= base_url('assets/admin/')?>assets/img/profiles/avatar-13.jpg">
										</span>
										<div class="media-body flex-grow-1">
											<p class="noti-details">
												<span class="noti-title">
													Bernardo Galaviz
												</span>
												added new task
												<span class="noti-title">
													Private chat module
												</span>
											</p>
											<p class="noti-time">
												<span class="notification-time">
													2 days ago
												</span>
											</p>
										</div>
									</div>
								</a>
							</li>
						</ul>
					</div>
					<div class="topnav-dropdown-footer">
						<a href="activities.html">View all Notifications</a>
					</div>
				</div>
			</li>

			<li class="nav-item dropdown has-arrow main-drop">
				<a href="javascript:void(0);" class="dropdown-toggle nav-link userset" data-bs-toggle="dropdown">
					<span class="user-img">
						<img src="<?= base_url('assets/admin/')?>assets/img/admin.png" alt="">
						<span class="status online"></span>
					</span>
				</a>
				<div class="dropdown-menu menu-drop-user">
					<div class="profilename">
						<div class="profileset">
							<span class="user-img">
								<img src="<?= base_url('assets/admin/')?>assets/img/admin.png" alt="">
								<span class="status online"></span>
							</span>
							<div class="profilesets">
								<h6><?= $this->session->userdata('nama'); ?></h6>
								<h5><?= $this->session->userdata('level'); ?></h5>
							</div>
						</div>
						<hr class="m-0">
						<a class="dropdown-item" href="profile.html">
							<i class="me-2" data-feather="user"></i> My Profile
						</a>
						<a class="dropdown-item" href="generalsettings.html">
							<i class="me-2" data-feather="settings"></i>Settings
						</a>
						<hr class="m-0">
						<a class="dropdown-item logout pb-0" href="<?= base_url('admin/auth/logout')?>">
							<img src="<?= base_url('assets/admin/')?>assets/img/icons/log-out.svg" class="me-2"
								alt="img">Logout
						</a>
					</div>
				</div>
			</li>
		</ul>

		<div class="dropdown mobile-user-menu">
			<a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
				aria-expanded="false">
				<i class="fa fa-ellipsis-v"></i>
			</a>
			<div class="dropdown-menu dropdown-menu-right">
				<a class="dropdown-item" href="profile.html">My Profile</a>
				<a class="dropdown-item" href="generalsettings.html">Settings</a>
				<a class="dropdown-item" href="signin.html">Logout</a>
			</div>
		</div>
	</div>

	<div class="sidebar" id="sidebar">
		<div class="sidebar-inner slimscroll">
			<div id="sidebar-menu" class="sidebar-menu">
				<ul>
					<?php $menu = $this->uri->segment(2); ?>
					<li class="menu-item <?php if($menu=='home{echo "active";}')?>">
						<a href="<?= base_url('admin/home')?>">
							<img src="<?= base_url('assets/admin/')?>assets/img/icons/dashboard.svg" alt="img">
							<span>
								Dashboard
							</span>
						</a>
					</li>
					<li class="menu-item <?php if($menu=='caraousel{echo "active";}')?>">
						<a href="<?= base_url('admin/caraousel')?>">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
								fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
								stroke-linejoin="round" class="feather feather-cast">
								<path
									d="M2 16.1A5 5 0 0 1 5.9 20M2 12.05A9 9 0 0 1 9.95 20M2 8V6a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2h-6">
								</path>
								<line x1="2" y1="20" x2="2.01" y2="20"></line>
							</svg>
							<span>Caraousel</span>
						</a>
					</li>
					<li class="menu-item <?php if($menu=='galeri{echo "active";}')?>">
						<a href="<?= base_url('admin/galeri')?>">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
								fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
								stroke-linejoin="round" class="feather feather-cast">
								<path
									d="M2 16.1A5 5 0 0 1 5.9 20M2 12.05A9 9 0 0 1 9.95 20M2 8V6a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2h-6">
								</path>
								<line x1="2" y1="20" x2="2.01" y2="20"></line>
							</svg>
							<span>Galeri</span>
						</a>
					</li>
					<li class="menu-item <?php if($menu=='kategori{echo "active";}')?>">
						<a href="<?= base_url('admin/kategori')?>">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
								fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
								stroke-linejoin="round" class="feather feather-file-text">
								<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
								<polyline points="14 2 14 8 20 8"></polyline>
								<line x1="16" y1="13" x2="8" y2="13"></line>
								<line x1="16" y1="17" x2="8" y2="17"></line>
								<polyline points="10 9 9 9 8 9"></polyline>
							</svg>
							<span>Kategori Konten</span>
						</a>
					</li>
					<li class="menu-item <?php if($menu=='konten{echo "active";}')?>">
						<a href="<?= base_url('admin/konten')?>">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
								fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
								stroke-linejoin="round" class="feather feather-camera">
								<path
									d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z">
								</path>
								<circle cx="12" cy="13" r="4"></circle>
							</svg>
							<span>Konten</span>
						</a>
					</li>
					<li class="menu-item <?php if($menu=='konfigurasi{echo "active";}')?>">
						<a href="<?= base_url('admin/konfigurasi')?>">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
								fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
								stroke-linejoin="round" class="feather feather-edit">
								<path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
								<path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
							</svg>
							<span>Konfigurasi</span>
						</a>
					</li class="menu-item <?php if($menu=='user{echo "active";}')?>">
					<?php if ($this->session->userdata('level') == 'Admin'){ ?>
					<li>
						<a href="<?= base_url('admin/user')?>">
							<img src="<?= base_url('assets/admin/')?>assets/img/icons/users1.svg" alt="img">
							<span>
								Users
							</span>
						</a>
					</li>
					<?php } ?>
				</ul>
			</div>
		</div>
	</div>
