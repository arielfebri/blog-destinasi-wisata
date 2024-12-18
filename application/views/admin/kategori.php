<div id="menghilang">
	<?php echo $this->session->flashdata('alert',true); ?>
</div>
<div class="page-wrapper ms-0 pt-0">
	<div class="content">
		<div class="page-header">
			<div class="page-title">
				<h4>Kategori </h4>
				<h6>Kelola Kategori</h6>
			</div>

			<!-- input star -->
			<div class="page-btn">
				<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
					data-bs-whatever="@mdo">Add Kategori</button>
				<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
					aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<form action="<?= base_url('admin/kategori/simpan')?>" method="post">

								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">Add Kategori</h5>
									<button type="button" class="btn-close" data-bs-dismiss="modal"
										aria-label="Close"></button>
								</div>
								<div class="modal-body">
									<form>

										<div class="form-group">
											<label>Nama Kategori</label>
											<input type="text" name="nama_kategori" class="form-control" required
												placeholder="masukkan nama kategori">
										</div>
								</div>
								<br>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary"
										data-bs-dismiss="modal">Cancel</button>
									<button type="submit" class="btn btn-primary">Tambah</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- input end -->

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
								<th>Nama Kategori</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php $no=1; foreach($kategori as $aa) {?>
							<tr>
								<td>
									<label class="checkboxs">
										<input type="checkbox">
										<span class="checkmarks"></span>
									</label>
								</td>
								<td><?= $aa['nama_kategori']?></td>
								<td>
									<a type="button" class="me-3"
										href="<?=base_url('kategori/edit/' .$aa['id_kategori'])?>"
										data-bs-toggle="modal" data-bs-target="#editModal<?=$aa['id_kategori']?>"
										data-bs-whatever="@mdo">
										<img src="<?= base_url('assets/admin/')?>assets/img/icons/edit.svg" alt="img">

									</a>

									<a onClick="return confirm('apakah anda yakin ingin menghapus data ini?')"
										class="me-3 "
										href="<?= base_url('admin/kategori/hapus/'.$aa['id_kategori']); ?>">
										<img src="<?= base_url('assets/admin/')?>assets/img/icons/delete.svg" alt="img">
									</a>
								</td>
							</tr>
							<!-- edit star -->
							<div class="modal fade" id="editModal<?=$aa['id_kategori']?>" tabindex="-1"
								aria-labelledby="editModalLabel<?=$aa['id_kategori']?>" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="editModalLabel">Edit</h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal"
												aria-label="Close"></button>
										</div>
										<div class="modal-body">
											<form action="<?= base_url('admin/kategori/update')?>" method="post">
												<input type="hidden" name="id_kategori" value="<?=$aa['id_kategori']?>">
												<div class="form-group">
													<label>Nama Kategori</label>
													<input type="text" name="nama_kategori" class="form-control"
														required value="<?= $aa['nama_kategori']?>">
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
