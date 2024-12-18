<!-- Blog -->
<?php
$search = '';
if (isset($_POST['submit-search'])) {
    $search = $_POST['search'];
}
?>
<div class="container" style="margin-top: 50px;">
	<section class="sec-blog bg0 p-t-60 p-b-90">
		<div class="container">
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

				<div class="flex-w flex-c-m m-tb-10">
					<div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
						<i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
						<i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
						Search
					</div>
				</div>

				<!-- Search product -->
				<div class="dis-none panel-search w-full p-t-10 p-b-15">
					<div class="bor8 dis-flex p-l-15">
						<button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
							<i class="zmdi zmdi-search"></i>
						</button>
						<input id="search-product" class="mtext-107 cl2 size-114 plh2 p-r-15" type="text"
							name="search-product" placeholder="Search">
					</div>
				</div>


			</div>

			<div id="product-container" class="row isotope-grid">
				<?php foreach ($konten as $uu) { ?>
				<div class="col-sm-6 col-md-4 p-b-40 isotope-item <?= $uu['id_kategori']?>">
					<div class="blog-item">
						<div class="hov-img0">
							<a href="<?= base_url('home/artikel/'. $uu['slug'])?>">
								<img style="object-fit: cover;width:500px;height:250px" src="<?= base_url('assets/upload/konten/' . $uu['foto']) ?>"
									alt="<?= $uu['judul'] ?>">
							</a>
						</div>

						<div class="p-t-15">
							<div class="stext-107 flex-w p-b-14" >
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
		</div>
	</section>

	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>
</div>
