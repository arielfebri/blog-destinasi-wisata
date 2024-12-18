<div class="container" style="margin-top: 100px;">
	<div>
		<h3 class="ltext-105 cl5 txt-center respon1">
			Galeri
		</h3>
		<section class="sec-blog bg0 p-t-60 p-b-90">
			<div class="container">
				<div id="product-container" class="row isotope-grid">
					<?php foreach($galeri as $aa) { ?>
					<div class="col-sm-6 col-md-4 p-b-40 isotope-item">
						<div class="blog-item">
							<div class="hov-img0">
								<img style="object-fit: cover;width:500px;height:250px"
									src="<?= base_url('assets/upload/galeri/'.$aa['foto']) ?>" alt="<?= $aa['judul'] ?>"
									class="gallery-item" data-toggle="modal" data-target="#imageModal"
									data-src="<?= base_url('assets/upload/galeri/'.$aa['foto']) ?>"
									data-caption="<?= $aa['judul'] ?>">
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</section>


		<!-- Modal -->
		<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<!-- Tidak menggunakan modal-lg atau modal-sm -->
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="imageModalLabel">Gambar Detail</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body text-center">
						<img id="modal-image" src="" alt="" class="img-fluid">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
