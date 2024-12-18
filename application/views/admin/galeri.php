<div id="menghilang">
	<?php echo $this->session->flashdata('alert',true); ?>
</div>
<div class="container">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-header">
				<h5 class="card-title">Galeri</h5>
			</div>
			<div class="card-body">
				<form action="<?= base_url('admin/galeri/simpan')?>" method="post" enctype="multipart/form-data">
					<div class="form-group row">
						<label>Judul</label>
						<input type="text" name="judul" class="form-control" required placeholder="judul foto">
					</div>
					<div class="form-group row">
						<label class="form-label">Masukkan Foto Dengan Ukuran 1:3</label>
						<input class="form-control" type="file" name="foto">
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-primary">Simpan</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<br>
	<br>
	<br>
	<?php foreach($galeri as $aa){?>
	<div class="card" style="align-items: center; border:0;background-color:transparent;margin: top 100px;">
		<div class="col-md-8 mb-3 mt-10 d-flex ">
			<div class="productset flex-fill">
				<div class="productsetimg">
					<img src="<?= base_url('assets/upload/galeri/'.$aa['foto']) ?>">
					<h6>Qty: 5.00</h6>
					<div class="check-product">
						<i class="fa fa-check"></i>
					</div>
				</div>
				<div class="productsetcontent">
					<h4><?= $aa['judul']?></h4>
					<br>
					<a onClick="return confirm('apakah anda yakin ingin menghapus konten ini?')" class="me-3 "
						href="<?= base_url('admin/galeri/hapus/'.$aa['foto']); ?>">
						<img src="<?= base_url('assets/admin/')?>assets/img/icons/delete.svg" alt="img">
					</a>
				</div>
			</div>
		</div>
	</div>
	<?php } ?>
</div>
