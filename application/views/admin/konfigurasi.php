<div id="menghilang">
	<?php echo $this->session->flashdata('alert',true); ?>
</div>


<!-- input star -->
<div class="modal-content">
	<form action="<?= base_url('admin/konfigurasi/update')?>" method="post">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Konfigurasi</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
			<form>

				<div class="form-group">
					<label>Judul Website</label>
					<input type="text" name="judul_website" class="form-control" value="<?= $konfig->judul_website; ?>">
				</div>
				<div class="col-lg-12">
					<div class="form-group">
						<label>Profil Website</label>
						<textarea class="form-control" name="profil_website"><?= $konfig->profil_website; ?></textarea>
					</div>
					<div class="form-group">
						<label>Instagram</label>
						<input type="text" class="form-control" name="instagram"
							value="<?= $konfig->instagram; ?>"></input>
					</div>
					<div class="form-group">
						<label>Facebook</label>
						<input type="text" class="form-control" name="facebook"
							value="<?= $konfig->facebook; ?>"></input>
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" name="email" value="<?= $konfig->email; ?>"></input>
					</div>
					<div class="form-group">
						<label>Alamat</label>
						<input type="text" class="form-control" name="alamat" value="<?= $konfig->alamat; ?>"></input>
					</div>
					<div class="form-group">
						<label>WhatsApp</label>
						<input type="text" class="form-control" name="no_wa" value="<?= $konfig->no_wa; ?>"></input>
					</div>
				</div>
		</div>
		<br>
		<div class="modal-footer">
			<button type="submit" class="btn btn-primary">Tambah</button>
		</div>
	</form>
</div>
</div>
</div>
</div>
<!-- input end -->
