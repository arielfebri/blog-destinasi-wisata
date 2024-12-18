<!-- Slider -->
<section class="section-slide">
	<div class="wrap-slick1">
		<div class="slick1">
			<?php $no = 1; foreach($caraousel as $aa): ?>
			<div class="item-slick1"
				style="background-image: url(<?= base_url('assets/upload/caraousel/'.$aa['foto']) ?>);object-fit: cover;">
				<div class="container h-full">
					<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
						<div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
							<span class="ltext-101 text-white cl2 respon2">
								Karanganyar
							</span>
						</div>

						<div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
							<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1 text-white">
								Explore
							</h2>
						</div>

						<div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
							<a href="<?= base_url('blog')?>"
								class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04" style="text-decoration: none;">
								Selengkapnya
							</a>
						</div>
					</div>
				</div>
			</div>
			<?php $no++; endforeach; ?>
		</div>
	</div>
</section>


<!-- Blog -->
<section class="sec-blog bg0 p-t-60 p-b-90">
	<div class="container">
		<div class="p-b-66">
			<h3 class="ltext-105 cl5 txt-center respon1">
				Destinasi
			</h3>
		</div>

		<div class="flex-w flex-sb-m p-b-52">
		<div class="flex-w flex-l-m filter-tope-group m-tb-10">
					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
						All Destinasi
					</button>
					<?php foreach($kategori as $kate){ ?>
					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5"
						data-filter=".<?= $kate['id_kategori']?>">
						<?= $kate['nama_kategori'] ?>
					</button>
					<?php } ?>
				</div>
			<!-- Search product -->
			<div class="dis-none panel-search w-full p-t-10 p-b-15">
				<div class="bor8 dis-flex p-l-15">
					<button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>

					<input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="search-product"
						placeholder="Search">
				</div>
			</div>
		</div>

		<div class="row isotope-grid">
			<?php 
            $counter = 0;
            foreach ($konten as $uu) { 
                if ($counter >= 6) break; // Batasi hingga 6 konten
                $counter++;
            ?>
			<div class="col-sm-6 col-md-4 p-b-40 isotope-item <?= $uu['id_kategori']?>">
				<div class="blog-item">
					<div class="hov-img0">
						<a href="<?= base_url('home/artikel/'. $uu['slug'])?>">
							<img style="object-fit: cover;width:500px;height:250px"
								src="<?= base_url('assets/upload/konten/' . $uu['foto']) ?>" alt="<?= $uu['judul'] ?>">
						</a>
					</div>

					<div class="p-t-15">
						<div class="stext-107 flex-w p-b-14">
							<span style="margin-right: 15px;">
								<span class="cl4"><i class="fa-solid fa-file"></i></span>
								<span class="cl5"><?= $uu['nama_kategori'] ?></span>
							</span>
							<span class="m-r-3">
								<span class="cl4"><i class="fa-solid fa-location-dot"></i></span>
								<span class="cl5"><?= $uu['lokasi'] ?></span>
							</span>
						</div>

						<h4 class="p-b-12">
							<a href="<?= base_url('home/artikel/'. $uu['slug'])?>"
								class="mtext-101 cl2 hov-cl1 trans-04 js-name-b2" style="text-decoration: none;">
								<?= $uu['judul'] ?>
							</a>
						</h4>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
		<div class="flex-c-m flex-w w-full p-t-45">
			<a href="<?= base_url('blog')?>" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
				Selengkapnya
			</a>
		</div>
	</div>
</section>


<!-- Back to top -->
<div class="btn-back-to-top" id="myBtn">
	<span class="symbol-btn-back-to-top">
		<i class="zmdi zmdi-chevron-up"></i>
	</span>
</div>
