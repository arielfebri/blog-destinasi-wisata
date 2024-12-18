<div class="container" style="margin-top: 80px;">
	<div class="container" style="margin-left: 110px;">
		<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
			<a href="<?= base_url()?>" class="stext-109 cl8 hov-cl1 trans-04">
				Home
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<a href="<?= base_url('blog')?>" class="stext-109 cl8 hov-cl1 trans-04">
				Blog
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>
			<p class="stext-109 cl8 hov-cl1 trans-04">
				Detail
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</p>


			<span class="stext-109 cl4">
				<?= $konten->judul;?>
			</span>
		</div>
	</div>


	<!--Bagian Content-->
	<section class="bg0 p-t-52 p-b-20">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-lg-12 p-b-80">
					<div class="p-r-45 p-r-0-lg" style="text-align:center">
						<!--  -->
						<div class="wrap-pic-w how-pos5-parent">
							<img style="border-radius: 10px;width:800px;height: 500px;;object-fit: cover;"
								src="<?= base_url('assets/upload/konten/' . $konten->foto) ?>">
						</div>

						<div class="p-t-32">
							<span class="flex-w flex-m stext-111 cl2 p-b-19" style="margin-left: 405px;">
								<span>
									<span class="cl4">By</span> <?= $konten->nama;?>
									<span class="cl12 m-l-4 m-r-6">|</span>
								</span>

								<span>
									<?= $konten->tanggal;?>
									<span class="cl12 m-l-4 m-r-6">|</span>
								</span>

								<span>
									<?= $konten->nama_kategori?>
									<span class="cl12 m-l-4 m-r-6">|</span>
								</span>
							</span>

							<h4 class="ltext-109 cl2 p-b-28">
								<?= $konten->judul;?>
							</h4>

							<p class="stext-117 cl6 p-b-26" style="text-align: left;">
								<?= nl2br( $konten->keterangan)?>
							</p>
						</div>

						<div class="flex-w flex-t p-t-16">
							<div class="flex-w size-217" style="margin-left: 480px;">
								<a href="<?= $konten->maps;?>" class="lihat-lokasi" target="_blank">
									<i class="fa-solid fa-map-marker-alt"></i> Lihat Lokasi
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Konten Terkait -->
	<section class="sec-relate-product bg0 p-t-45 p-b-105">
		<div class="container">
			<div class="p-b-45">
				<h3 class="ltext-106 cl5 txt-center">
					Konten Terkait
				</h3>
			</div>

			<!-- Slide2 -->
			<div class="wrap-slick2" style="display: flex; ">
				<?php if (!empty($related)) : ?>
				<?php foreach ($related as $item) : ?>
				<div class="col-sm-6 col-md-4 p-b-40">
					<div class="blog-item">
						<div class="hov-img0">
							<a href="<?= base_url('home/artikel/' . $item['slug']) ?>">
								<img style="object-fit: cover;width:500px;height:250px"
									src="<?= base_url('assets/upload/konten/' . $item['foto']) ?>"
									alt="<?= $item['judul'] ?>">
							</a>
						</div>
						<div class="p-t-15">
							<div class="stext-107 flex-w p-b-14">
								<span style="margin-right: 15px;">
									<span class="cl4"><i class="fa-solid fa-file"></i></span>
									<span class="cl5"><?= $item['nama_kategori'] ?></span>
								</span>
								<span class="m-r-3">
									<span class="cl4"><i class="fa-solid fa-location-dot"></i></span>
									<span class="cl5"><?= $item['lokasi'] ?></span>
								</span>
							</div>

							<h4 class="p-b-12">
								<a href="<?= base_url('home/artikel/'. $item['slug'])?>"
									class="mtext-101 cl2 hov-cl1 trans-04 js-name-b2" style="text-decoration: none;">
									<?= $item['judul'] ?>
								</a>
							</h4>
						</div>
					</div>
				</div>
				<?php endforeach; ?>
				<?php else : ?>
				<p>Tidak Ada Konten Terkait</p>
				<?php endif; ?>
			</div>
			<div class="flex-c-m flex-w w-full p-t-45">
				<a href="<?= base_url('blog')?>"
					class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
					Selengkapnya
				</a>
			</div>
		</div>
</div>
</section>

</div>
