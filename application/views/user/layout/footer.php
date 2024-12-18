<!-- Footer -->
<footer class="bg3 p-t-75 p-b-32">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-lg-3 p-b-50" >
				<h4 class="stext-301 cl0 p-b-30">
					Contatc
				</h4>

				<p class="stext-107 cl7 size-201">
					<?= $konfig->alamat; ?>
				</p>
				<p class="stext-107 cl7 size-201">
					<?= $konfig->instagram; ?>
				</p>
				<p class="stext-107 cl7 size-201">
					<?= $konfig->facebook; ?>
				</p>
				<p class="stext-107 cl7 size-201">
					<?= $konfig->email; ?>
				</p>
				<p class="stext-107 cl7 size-201">
					<?= $konfig->no_wa; ?>
				</p>

				<div class="p-t-27">
					<a href="<?= $konfig->facebook; ?>" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
						<i class="fa-brands fa-facebook"></i>
					</a>

					<a href="<?= $konfig->instagram; ?>" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
						<i class="fa-brands fa-instagram"></i>
					</a>

					<a href="<?= $konfig->no_wa; ?>" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
						<i class="fa-brands fa-whatsapp"></i>
					</a>
				</div>
			</div>
			
			<div class="col-sm-6 col-lg-3 p-b-50"style="margin-left: 100px;">
				<h4 class="stext-301 cl0 p-b-30">
					<?= $konfig->judul_website; ?>
				</h4>
				
				<ul>
					<li class="p-b-10">
						<p class="stext-107 cl7 hov-cl1 trans-04">
						<?= $konfig->profil_website; ?>
						</p>
					</li>
				</ul>
			</div>
			
			<div class="col-sm-6 col-lg-3 p-b-50"  style="margin-left: 100px;">
				<h4 class="stext-301 cl0 p-b-30">
					Kategori
				</h4>
	
				<ul>
					<?php foreach($kategori as $kate) { ?>
					<li class="p-b-10">
						<p  class="stext-107 cl7 hov-cl1 trans-04">
							<?= $kate['nama_kategori']?>
						</p>
					</li>
					<?php } ?>
				</ul>
			</div>
		</div>
		<div class="p-t-40">
			<p class="stext-107 cl6 txt-center">
				<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				Copyright &copy;<script>
					document.write(new Date().getFullYear());

				</script> All rights reserved | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a
					href="<?= base_url()?>" target="_blank">Arfb</a> &amp; distributed by <a
					href="https://themewagon.com" target="_blank">ThemeWagon</a>
				<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
			</p>
		</div>
	</div>
</footer>
