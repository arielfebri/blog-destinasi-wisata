<div id="menghilang">
	<?php echo $this->session->flashdata('alert',true); ?>
</div>

<!-- content star -->
<div class="page-wrapper ms-0 pt-0">
	<div class="content">
		<div class="page-header">
			<div class="page-title">
				<h4>Data User</h4>
				<h6>Kelola Data User</h6>
			</div>
			<!-- modal input -->
			<div class="card-content">
				<div class="card-body">
					<div class="form-group">
						<!-- Button trigger for login form modal -->
						<button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
							data-bs-target="#inlineForm">
							Tambah User
						</button>
					</div>
				</div>
			</div>


			<!--login form Modal -->
			<div class="modal fade text-left" id="inlineForm" tabindex="-1" aria-labelledby="myModalLabel33"
				style="display: none;" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
					<div class="modal-content">
						<div class="container" style="margin: 5px;">
							<div class="modal-header">
								<h4 class="modal-title" id="myModalLabel33">Tambah User</h4>
								<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
									<i data-feather="x"></i>
								</button>
							</div>
							<form action="<?= base_url('admin/user/simpan')?>" method="post">
								<div class="form-group" style="margin-top: 10px;">
									<label>User name</label>
									<input type="text" name="username" class="form-control" required
										placeholder="masukkan username">
								</div>
								<div class="form-group">
									<label>Nama</label>
									<input type="text" name="nama" class="form-control" required
										placeholder="masukkan nama">
								</div>
								<div class="form-group">
									<label>Password</label>
									<div class="pass-group">
										<input type="password" class=" pass-input" name="password" required
											placeholder="Masukkan password">
										<span class="fas toggle-password fa-eye-slash"></span>
									</div>
								</div>
								<div class="form-group">
									<label>Level</label>
									<select name="level" class="form-control">
										<option value="Admin">Admin</option>
										<option value="Kontributor">Kontributor</option>
									</select>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-dark" data-bs-dismiss="modal">
										<i class="bx bx-x d-block d-sm-none"></i>
										<span class="d-none d-sm-block">Close</span>
									</button>

									<button type="submit" class="btn btn-primary ml-1">
										<i class="bx bx-check d-block d-sm-none"></i>
										<span class="d-none d-sm-block">Simpan</span>
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>


			<!-- modal input end -->
		</div>

		<div class="card">
			<div class="card-body">
				<div class="table-top">
					<div class="search-set">
						<div class="search-path">
							<a class="btn btn-filter" id="filter_search">
								<img src="<?= base_url('assets/admin/')?>assets/img/icons/filter.svg" alt="img">
								<span><img src="<?= base_url('assets/admin/')?>assets/img/icons/closes.svg"
										alt="img"></span>
							</a>
						</div>
						<div class="search-input">
							<a class="btn btn-searchset"><img
									src="<?= base_url('assets/admin/')?>assets/img/icons/search-white.svg"
									alt="img"></a>
						</div>
					</div>
					<div class="wordset">
						<ul>
							<li>
								<a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"><img
										src="<?= base_url('assets/admin/')?>assets/img/icons/pdf.svg" alt="img"></a>
							</li>
							<li>
								<a data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img
										src="<?= base_url('assets/admin/')?>assets/img/icons/excel.svg" alt="img"></a>
							</li>
							<li>
								<a data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img
										src="<?= base_url('assets/admin/')?>assets/img/icons/printer.svg" alt="img"></a>
							</li>
						</ul>
					</div>
				</div>
				<div class="table-responsive">
					<table class="table  datanew">
						<thead>
							<tr>
								<th>
									<label class="checkboxs">
										<input type="checkbox">
										<span class="checkmarks"></span>
									</label>
								</th>
								<th>Username </th>
								<th>Nama</th>
								<th>Level</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php $no=1; foreach($user as $aa) {?>
							<tr>
								<td>
									<label class="checkboxs">
										<input type="checkbox">
										<span class="checkmarks"></span>
									</label>
								</td>
								<td><?= $aa['username']?></td>
								<td><?= $aa['nama']?></td>
								<td><?= $aa['level']?></td>
								<td>
									<a type="button" class="me-3" href="<?=base_url('user/edit/' .$aa['id_user'])?>"
										data-bs-toggle="modal" data-bs-target="#editModal<?=$aa['id_user']?>"
										data-bs-whatever="@mdo">
										<img src="<?= base_url('assets/admin/')?>assets/img/icons/edit.svg" alt="img">

									</a>

									<a onClick="return confirm('apakah anda yakin ingin menghapus data ini?')"
										class="me-3 " href="<?= base_url('admin/user/hapus/'.$aa['id_user']); ?>">
										<img src="<?= base_url('assets/admin/')?>assets/img/icons/delete.svg" alt="img">
									</a>
								</td>
							</tr>
							<!-- edit star -->
							<div class="modal fade" id="editModal<?=$aa['id_user']?>" tabindex="-1"
								aria-labelledby="editModalLabel<?=$aa['id_user']?>" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="editModalLabel">Edit Data User</h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal"
												aria-label="Close"></button>
										</div>
										<div class="modal-body">
											<form action="<?= base_url('admin/user/update')?>" method="post">
												<input type="hidden" name="id_user" value="<?=$aa['id_user']?>">
												<div class="form-group">
													<label>Nama</label>
													<input type="text" name="nama" class="form-control" required
														value="<?= $aa['nama']?>">
												</div>

												<div class="form-group">
													<label>User name</label>
													<input type="text" name="username" class="form-control" required
														value="<?= $aa['username']?>" readonly>
												</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary"
												data-bs-dismiss="modal">Close</button>
											<button type="submit" class="btn btn-primary">Save</button>
										</div>
										</form>
									</div>
								</div>
							</div>
							<!-- edit end -->
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>

	</div>
</div>
</div>
<!-- content end -->
