<!-- alert -->
<div id="menghilang">
	<?php echo $this->session->flashdata('alert',true); ?>
</div>
<div class="page-wrapper ms-0 pt-0">
	<div class="content">
		<div class="page-header">
			<div class="page-title">
				<h4>Daftar Konten</h4>
				<h6>Kelola Konten</h6>
			</div>
			<!-- input star -->
			<div class="page-btn">
				<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
					data-bs-whatever="@mdo">Tambah Konten</button>
				<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
					aria-hidden="true">
					<div class="modal-dialog  modal-lg">
						<div class="modal-content">
							<form action="<?= base_url('admin/konten/simpan')?>" method="post"
								enctype='multipart/form-data'>

								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">Tambah Konten</h5>
									<button type="button" class="btn-close" data-bs-dismiss="modal"
										aria-label="Close"></button>
								</div>
								<div class="modal-body">
									<form>

										<div class="form-group">
											<label>Judul Konten</label>
											<input type="text" name="judul" class="form-control" required
												placeholder="judul konten">
										</div>
										<div class="col-lg-12">
											<div class="form-group">
												<label>Description</label>
												<textarea class="form-control" name="keterangan" require
													placeholder="description"></textarea>
											</div>
											<div class="form-group">
												<label>Lokasi</label>
												<input type="text" name="lokasi" class="form-control" required
													placeholder="lokasi">
											</div>
											<div class="form-group">
												<label for="link-input">Masukkan URL Google Maps:</label><br>
												<input type="url" id="link-input" name="maps" class="form-control" placeholder="https://maps.google.com" required>
											</div>

											<div class="form-group row">
												<label class="form-label">Image</label>
												<input class="form-control" type="file" name="foto"
													accept="image/png, image/jpeg">
											</div>
											<div class="form-group">
												<label>Category</label>
												<select name="id_kategori" class="form-control" required>
													<?php $no=1; foreach($kategori as $aa) {?>
													<option value="<?= $aa['id_kategori']?>"><?= $aa['nama_kategori']?>
													</option>
													<?php } ?>
												</select>
											</div>
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
								<span>
									<img src="<?= base_url('assets/admin/')?>assets/img/icons/closes.svg" alt="img">
								</span>
							</a>
						</div>
						<div class="search-input">
							<a class="btn btn-searchset">
								<img src="<?= base_url('assets/admin/')?>assets/img/icons/search-white.svg" alt="img">
							</a>
						</div>
					</div>
					<div class="wordset">
						<ul>
							<li>
								<a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf">
									<img src="<?= base_url('assets/admin/')?>assets/img/icons/pdf.svg" alt="img">
								</a>
							</li>
							<li>
								<a data-bs-toggle="tooltip" data-bs-placement="top" title="excel">
									<img src="<?= base_url('assets/admin/')?>assets/img/icons/excel.svg" alt="img">
								</a>
							</li>
							<li>
								<a data-bs-toggle="tooltip" data-bs-placement="top" title="print">
									<img src="<?= base_url('assets/admin/')?>assets/img/icons/printer.svg" alt="img">
								</a>
							</li>
						</ul>
					</div>
				</div>

				<div class="card mb-0" id="filter_inputs">
					<div class="card-body pb-0">
						<div class="row">
							<div class="col-lg-12 col-sm-12">
								<div class="row">
									<div class="col-lg col-sm-6 col-12">
										<div class="form-group">
											<select class="select">
												<option>Choose Product</option>
												<option>Macbook pro</option>
												<option>Orange</option>
											</select>
										</div>
									</div>
									<div class="col-lg col-sm-6 col-12">
										<div class="form-group">
											<select class="select">
												<option>Choose Category</option>
												<option>Computers</option>
												<option>Fruits</option>
											</select>
										</div>
									</div>
									<div class="col-lg col-sm-6 col-12">
										<div class="form-group">
											<select class="select">
												<option>Choose Sub Category</option>
												<option>Computer</option>
											</select>
										</div>
									</div>
									<div class="col-lg col-sm-6 col-12">
										<div class="form-group">
											<select class="select">
												<option>Brand</option>
												<option>N/D</option>
											</select>
										</div>
									</div>
									<div class="col-lg col-sm-6 col-12 ">
										<div class="form-group">
											<select class="select">
												<option>Price</option>
												<option>150.00</option>
											</select>
										</div>
									</div>
									<div class="col-lg-1 col-sm-6 col-12">
										<div class="form-group">
											<a class="btn btn-filters ms-auto"><img
													src="<?= base_url('assets/admin/')?>assets/img/icons/search-whites.svg"
													alt="img"></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="table-responsive">
					<table class="table  datanew">
						<thead>
							<tr>
								<th>No</th>
								<th>Judul Konten</th>
								<th>Kategori</th>
								<th>Tanggal</th>
								<th>Kreator</th>
								<th>Foto</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 0;  ?>
							<?php foreach($konten as $aa) {?>
							<?php $no++; ?>
							<tr>
								<td><?= $no; ?></td>
								<td><?= $aa['judul']?></td>
								<td><?= $aa['nama_kategori']?></td>
								<td><?= $aa['tanggal']?></td>
								<td><?= $aa['nama']?></td>
								<td>
									<button type="button" class="btn btn-sm view-photo-button" data-toggle="modal"
										data-target="#viewPhotoModal<?= $aa['id_konten'] ?>">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
											fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
											<path
												d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
										</svg>
										lihat foto
									</button>
									<div class="modal fade" id="viewPhotoModal<?= $aa['id_konten'] ?>" tabindex="-1"
										role="dialog" aria-labelledby="viewPhotoModalLabel<?= $aa['id_konten'] ?>"
										aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title"
														id="viewPhotoModalLabel<?= $aa['id_konten'] ?>">
														<?= $aa['foto']?></h5>
													<button type="button" class="close" data-dismiss="modal"
														aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<img src="<?= base_url('assets/upload/konten/'.$aa['foto']) ?>"
														class="img-fluid" alt="Foto">
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary"
														data-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
								</td>
								<td>
									<a type="button" class="me-3" data-bs-toggle="modal"
										data-bs-target="#konten<?= $no; ?>" title="Edit">
										<img src="<?= base_url('assets/admin/')?>assets/img/icons/edit.svg" alt="img">
										<i class="bi bi-pencil" style="font-size: 20px; filter: grayscale(100%);"></i>
										<!-- Black and White Edit Icon -->
									</a>

									<a onClick="return confirm('apakah anda yakin ingin menghapus konten ini?')"
										class="me-3 " href="<?= base_url('admin/konten/hapus/'.$aa['foto']); ?>">
										<img src="<?= base_url('assets/admin/')?>assets/img/icons/delete.svg" alt="img">
									</a>
								</td>
							</tr>
							<!-- Modal Edit (Same as previous, unchanged) -->
							<div class="modal fade" id="konten<?= $no; ?>" tabindex="-1"
								aria-labelledby="editUserModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
									<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title" id="editUserModalLabel"><?= $aa['judul']; ?></h4>
											<button type="button" class="btn-close" data-bs-dismiss="modal"
												aria-label="Close"></button>
										</div>

										<!-- Modal Edit -->
										<form action="<?= base_url('admin/konten/update/' . $aa['id_kategori']) ?>"
											method="post" enctype="multipart/form-data">
											<input type="hidden" name="nama_foto" value="<?= $aa['foto']; ?>">
											<div class="modal-body">
												<!-- Input Judul -->
												<div class="mb-3">
													<label for="judul<?= $aa['id_kategori']; ?>"
														class="form-label">Judul
														Konten</label>
													<input type="text" class="form-control" name="judul"
														id="judul<?= $aa['id_kategori']; ?>"
														value="<?= $aa['judul']; ?>" required>
												</div>
												<!-- Input Kategori -->
												<div class="mb-3">
													<label for="kategori<?= $aa['id_kategori']; ?>"
														class="form-label">Kategori</label>
													<select name="id_kategori" id="kategori<?= $aa['id_kategori']; ?>"
														class="form-control" required>
														<?php foreach ($kategori as $uu): ?>
														<option value="<?= $uu['id_kategori']; ?>"
															<?= $uu['id_kategori'] == $aa['id_kategori'] ? 'selected' : ''; ?>>
															<?= $uu['nama_kategori']; ?>
														</option>
														<?php endforeach; ?>
													</select>
												</div>
												<!-- Input Keterangan -->
												<div class="mb-3">
													<label for="keterangan<?= $aa['id_kategori']; ?>"
														class="form-label">Description</label>
													<textarea id="keterangan<?= $aa['id_kategori']; ?>"
														name="keterangan" class="form-control" rows="4"
														required><?= $aa['keterangan']; ?></textarea>
												</div>
												<!-- input lokasi -->
												<div class="mb-3">
													<label for="lokasi<?= $aa['id_kategori']; ?>"
														class="form-label">Lokasi</label>
													<input type="text" class="form-control" name="lokasi"
														id="lokasi<?= $aa['id_kategori']; ?>"
														value="<?= $aa['lokasi']; ?>" required>
												</div>
												<!-- Input Maps -->
												 <div class="mb-3">
													 <label for="link-input">Masukkan URL Google Maps:</label><br>
													 <input type="url" id="link-input" name="maps" class="form-control" placeholder="https://maps.google.com" required>
												 </div>
												<!-- Input Foto -->
												<div class="mb-3">
													<label for="foto<?= $aa['id_kategori']; ?>" class="form-label">Foto
													</label>
													<input type="file" id="foto<?= $aa['id_kategori']; ?>" name="foto"
														class="form-control" accept="image/png, image/jpeg">
													<small class="form-text text-muted">Foto sebelumnya:
														<?= $aa['foto']; ?></small>
												</div>
											</div>

											<!-- Footer dengan Tombol Aksi -->
											<div class="modal-footer">
												<button type="button" class="btn btn-dark"
													data-bs-dismiss="modal">Close</button>
												<button type="submit" class="btn btn-primary">Simpan</button>
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
