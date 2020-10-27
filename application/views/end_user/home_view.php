<?php $this->load->view('template/body_atas') ?>
<?php $this->load->view('template/navbar') ?>
<div class="container-fluid px-0">

	<!-- Trending Produk -->
	<div class="row">
		<!-- <div class="col-2"></div> -->
		<div class="col-12 justify-center px-0">

			<div class="spinner w-100" style="height: 506px;">
				<div class="spinner-grow text-primary" id="preloader" role="status">
					<span class="sr-only">Loading...</span>
				</div>
			</div>

			<?php if ($produk == null) : ?>
				<p class="text-center">Produk belum Tersedia</p>
			<?php else : ?>
				<div class="owl-carousel owl-theme" style="overflow-y: hidden;" id="header">
					<?php
					$repeat = 0;
					foreach ($produk as $p) : ?>
						<?php $gambar = json_decode($p->foto_produk); ?>
						<?php foreach ($gambar[0] as $obj) : ?>
							<div class="item">
								<img src="<?= base_url('/upload/produk/') . $obj; ?>" class="image-produk card-img-top w-100" alt="Produk" style="height: 550px; object-fit: cover;">
								<div class="hover-link">
									<p style="font-size: 10pt;"><?= $p->nama_produk; ?></p>
									<p style="font-weight: bold;"><?= 'Rp. ' . number_format($p->harga); ?></p>
									<a href="<?= base_url('/Home/showProduk/') . encrypt_url($p->id_produk);  ?>" class="btn btn-primary btn-sm">Lihat Produk</a>
								</div>
							</div>
						<?php endforeach; ?>
					<?php
						$repeat++;
						if ($repeat == 5) {
							break;
						}
					endforeach; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>

<div class="container mt-4">
	<div class="jumbotron" style="background-color: white;">
		<p class="text-center" style="font-size: 16pt;">
			"<b>Onlywall</b> menyediakan produk seperti baju, sepatu, pernak pernik pesta dan segala kebutuhan anda dengan harga kompetitif dan model terbaru."
		</p>
	</div>
</div>
<!-- Logo , Brand dan Sejarahnya -->
<div class="container-fluid mx-0 p-0">
	<div class="jumbotron" style="background-color: #d1edff;">
		<div class="row">
			<div class="col-md-12 mb-5">
				<h6 class="text-center">Apa yang ada di <img class="ml-2" style="width: 200px;" src="<?= base_url('/upload/LOGO-ONLYWALL.png'); ?>" alt="OwLogo"></h6>
			</div>
		</div>
		<div class="row d-flex justify-content-center">
			<div class="col-lg-4 col-md-6 col-sm-12">
				<div class="media block-6 d-block text-center">
					<div class="icon mb-3">
						<ion-icon style="font-size: 64px; color: #344c9d;" name="shirt-outline"></ion-icon>
					</div>
					<div class="media-body">
						<h4 class="heading" style="font-weight: 600;">Model Produk terbaru</h4>
						<p style="font-size: 11pt;" class="text-secondary" style="font-weight: 100;">Onlywall selalu berusaha untuk tidak hanya memberikan kebutuhan terbaik untuk anda tapi juga terbaru sehingga tidak ketinggalan zaman.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12">
				<div class="media block-6 d-block text-center">
					<div class="icon mb-3">
						<ion-icon style="font-size: 64px; color: #ffd302;" name="trending-up-outline"></ion-icon>
					</div>
					<div class="media-body">
						<h4 class="heading" style="font-weight: 600;">Pengiriman Cepat</h4>
						<p style="font-size: 11pt;" class="text-secondary" style="font-weight: 100;">Kami selalu berusaha untuk melakukan pengiriman dihari yang sama saat pembelian dilakukan</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12">
				<div class="media block-6 d-block text-center">
					<div class="icon mb-3">
						<ion-icon style="font-size: 64px; color: #344c9d;" name="pricetags-outline"></ion-icon>
					</div>
					<div class="media-body">
						<h4 class="heading" style="font-weight: 600;">Harga Kompetitif</h4>
						<p style="font-size: 11pt;" class="text-secondary" style="font-weight: 100;">Kami semaksimal mungkin kami akan menyediakan produk dengan harga yang kompetitif, tidak terlalu murah memang tapi juga tidak terlalu mahal.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12">
				<div class="media block-6 d-block text-center">
					<div class="icon mb-3">
						<ion-icon style="font-size: 64px; color: #ffd302;" name="stats-chart-outline"></ion-icon>
					</div>
					<div class="media-body">
						<h4 class="heading" style="font-weight: 600;">Eceran dan partai</h4>
						<p style="font-size: 11pt;" class="text-secondary" style="font-weight: 100;">Kami melayani Pembelian dalam jumlah besar maupun eceran.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12">
				<div class="media block-6 d-block text-center">
					<div class="icon mb-3">
						<ion-icon style="font-size: 64px; color: #344c9d;" name="information-circle-outline"></ion-icon>
					</div>
					<div class="media-body">
						<h4 class="heading" style="font-weight: 600;">Info Info Seru Disini</h4>
						<p style="font-size: 11pt;" class="text-secondary" style="font-weight: 100;">Tidak hanya menjual produk kami juga ingin mengajak anda sama
							sama membaca berbagai hal seru untuk menambah wawasan anda.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Daftar Contoh Produk (8 Produk) -->
<div class="container-fluid mt-2 mb-5 mx-0 p-0">
	<h2 class="text-center" style="font-weight: 600; ">Product</h2>
	<p class="text-center text-secondary" style="font-size: 11pt;">
		Only Wall memiliki produk-produk yang trendy dan cocok untuk dibeli saat ini
	</p>
	<!-- Carousel Produk  -->
	<div class="container">
		<div class="col">
			<?php if ($produk == null) : ?>
				<p class="text-center">Produk belum Tersedia</p>
			<?php else : ?>
				<div class="owl-carousel owl-theme" style="overflow-y: hidden;" id="owl-1">
					<?php foreach ($produk as $p) : ?>
						<?php $gambar = json_decode($p->foto_produk); ?>
						<?php foreach ($gambar[0] as $obj) : ?>
							<div class="item1">
								<img src="<?= base_url('/upload/produk/') . $obj; ?>" class="image-produk p-0 m-0 w-100" alt="Produk" style="height: 250px; width: 250px; object-fit: cover;">
								<div class="hover-link2">
									<p style="font-size: 10pt;"><?= $p->nama_produk; ?></p>
									<p style="font-weight: bold;"><?= 'Rp. ' . number_format($p->harga); ?></p>
									<a href="<?= base_url('/Home/showProduk/') . encrypt_url($p->id_produk);  ?>" class="btn btn-primary btn-sm">Lihat Produk</a>
								</div>
								<p>
								</p>
							</div>
						<?php endforeach; ?>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
		</div>
		<h3 class="text-center m-5	">Detail</h3>
		<div class="container mt-5">
			<?php if ($produk == null) : ?>
				<p class="text-center">Produk belum Tersedia</p>
			<?php else : ?>
				<div class="row d-flex justify-content-center">
					<?php
					$count2 = 0;
					foreach ($produk as $p) : ?>
						<?php $gambar = json_decode($p->foto_produk); ?>
						<?php foreach ($gambar[0] as $obj) : ?>
							<div class="col-lg-3 col-md-6 col-sm-12">
								<div class="card item ml-1 my-3">
									<img src="<?= base_url('/upload/produk/') . $obj; ?>" class="image-produk card-img-top" alt="Produk" style="height: 200px; width: 400px; object-fit: cover;">
									<div class="desc m-2">
										<p style="font-size: 10pt;"><?= $p->nama_produk; ?></p>
										<p style="font-weight: bold;"><?= 'Rp. ' . number_format($p->harga); ?></p>
										<div class="mr-2">
											<a href="<?= base_url('/Home/showProduk/') . encrypt_url($p->id_produk);  ?>" class="btn btn-primary btn-sm mt-1">Lihat Produk</a>
											<a class="btn btn-success btn-sm mt-1" href="https://api.whatsapp.com/send?phone=6285773406307" role="button"><i style="vertical-align: middle;" class="mr-2 fab fa-fw fa-whatsapp" aria-hidden="true"></i>Chat WA</a>
										</div>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
					<?php
						$count2++;
						if ($count2 == 8) {
							break;
						}
					endforeach; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>
</div>

<div class="container-fluid px-0 mx-0">
	<div class="jumbotron" style="background-color: #d1edff;">
		<h2 class="text-center" style="font-weight: 600; ">Testimoni</h2>
		<p class="text-center pb-3">Dari Customer yang telah membeli produk kami</p>
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col-lg-6 col-md-12">
					<div class="row">
						<img style="overflow-y: hidden; height: 100px;" class="img-profile rounded-circle" src="https://picsum.photos/200?random=2">
						<div class="col">
							<h6>nadiapramesti</h6>
							<p style="font-size: 10pt;">
								<q>Produk sangat baik, sesuai pesanan, pengiriman cepat harga sesuai budjet.. rekomendeeeed </q>
							</p>
							<p class="text-secondary">~Shopee</p>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="row">
						<img style="overflow-y: hidden; height: 100px;" class="img-profile rounded-circle" src="https://picsum.photos/200?random=1">
						<div class="col">
							<h6>muhammadghifar</h6>
							<p style="font-size: 10pt;">
								<q>Pengiriman cepat. Seller nya juga ramah. Rencana mau pesan lagi untuk 17an.</q>
							</p>
							<p class="text-secondary">~Shopee</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Artikel Terbaru -->
<div class="container-fluid mx-0 p-0">
	<div class="jumbotron">
		<h2 class="text-center" style="font-weight: 600; ">Artikel</h2>
		<p class="text-center text-secondary" style="font-size: 11pt;">
			Dapatkan informasi valid yang bisa mengenai produk yang kami sajikan
		</p>
		<?php if ($artikel == null) : ?>
			<p class="text-center">Data tidak tersedia</p>
		<?php else : ?>
			<div class="row mx-2">
				<!-- Artikel card -->
				<div class="container owl-carousel" id="owl-2">
					<?php foreach ($artikel as $a) : ?>
						<div class="card item mb-3">
							<div class="row no-gutters">
								<div class="col-md-4">
									<img src="<?= base_url('upload/thumbnails/') .  $a->thumbnail; ?>" style="width: 400px; height: 200px; object-fit: cover;" class="card-img" alt="...">
								</div>
								<div class="col-md-8">
									<div class="card-body">
										<a style="text-decoration: none;" href="<?= base_url('/Home/showArtikel/') . encrypt_url($a->id_artikel); ?>">
											<h5 class="card-title"><?= $a->judul_artikel; ?></h5>
										</a>
										<p class="card-text my-0" style="font-size: 8pt;"><?= htmlspecialchars_decode(word_limiter($a->konten, 6)); ?><small><a href="<?= base_url('/Home/showArtikel/') . encrypt_url($a->id_artikel); ?>">Read More</a></small></p>
										<p class="card-text"><small class="text-muted"><?= $a->tgl_upload; ?></small></p>
									</div>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
			</div>
	</div>
</div>

<?php $this->load->view('template/footer'); ?>

<script>
	$("#header").hide();
	$(window).on("load", function() {
		$.when($("#preloader").fadeOut(1000)).done(function() {
			$("#header").fadeIn(1000);
			$(".spinner").remove();
		});
	});
	$("ion-icon").css("padding-right", "10px");
	$("LINK[href*='assets/css/sb-admin-2.min.css']").remove();
</script>

<?php $this->load->view('template/body_bawah'); ?>