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
			<!-- Awal Carousel -->
			<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
					<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
					<li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
					<li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active" data-interval="3000">
						<img src="https://picsum.photos/400/150?random=1" class="d-block w-100" alt="...">
						<div class="carousel-caption d-none d-md-block">
							<h5>First slide label</h5>
							<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
						</div>
					</div>
					<div class="carousel-item" data-interval="3000">
						<img src="https://picsum.photos/400/150?random=2" class="d-block w-100" alt="...">
						<div class="carousel-caption d-none d-md-block">
							<h5>Second slide label</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						</div>
					</div>
					<div class="carousel-item" data-interval="3000">
						<img src="https://picsum.photos/400/150?random=3" class="d-block w-100" alt="...">
						<div class="carousel-caption d-none d-md-block">
							<h5>Third slide label</h5>
							<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
						</div>
					</div>
					<div class="carousel-item" data-interval="3000">
						<img src="https://picsum.photos/400/150?random=4" class="d-block w-100" alt="...">
						<div class="carousel-caption d-none d-md-block">
							<h5>4th slide label</h5>
							<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
						</div>
					</div>
					<div class="carousel-item" data-interval="3000">
						<img src="https://picsum.photos/400/150?random=5" class="d-block w-100" alt="...">
						<div class="carousel-caption d-none d-md-block">
							<h5>5th slide label</h5>
							<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			<!-- <div class="col-2"></div> -->
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
				<h6 class="text-center">Apa yang ada di</h6>
			</div>
		</div>
		<div class="row d-flex justify-content-center">
			<div class="col-lg-4 col-md-6 col-sm-12">
				<div class="media block-6 d-block text-center">
					<div class="icon mb-3">
						<ion-icon style="font-size: 64px;" name="shirt-outline"></ion-icon>
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
						<ion-icon style="font-size: 64px;" name="trending-up-outline"></ion-icon>
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
						<ion-icon style="font-size: 64px;" name="pricetags-outline"></ion-icon>
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
						<ion-icon style="font-size: 64px;" name="stats-chart-outline"></ion-icon>
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
						<ion-icon style="font-size: 64px;" name="information-circle-outline"></ion-icon>
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
		<div class="owl-carousel owl-theme" style="overflow-y: hidden;" id="owl-1">
			<div class="card item">
				<img src="https://picsum.photos/200?random=1" class="image-produk card-img-top" alt="...">
				<div class="hover-link">
					<p>Nama Produk</p>
					<a href="#" class="btn btn-primary btn-sm">Lihat Produk</a>
				</div>
			</div>
			<div class="card item">
				<img src="https://picsum.photos/200?random=2" class="image-produk card-img-top" alt="...">
				<div class="hover-link">
					<p>Nama Produk</p>
					<a href="#" class="btn btn-primary btn-sm">Lihat Produk</a>
				</div>
			</div>
			<div class="card item">
				<img src="https://picsum.photos/200?random=3" class="image-produk card-img-top" alt="...">
				<div class="hover-link">
					<p>Nama Produk</p>
					<a href="#" class="btn btn-primary btn-sm">Lihat Produk</a>
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
		<div class="row mx-2">
			<!-- Artikel card -->
			<div class="container owl-carousel" id="owl-2">
				<div class="card item mb-3">
					<div class="row no-gutters">
						<div class="col-md-4">
							<img src="https://picsum.photos/200?random=5" class="card-img" alt="...">
						</div>
						<div class="col-md-8">
							<div class="card-body">
								<h5 class="card-title">Judul Artikel</h5>
								<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
								<p class="card-text"><small class="text-muted">diupload 3 jam yang lalu</small></p>
							</div>
						</div>
					</div>
				</div>

				<div class="card item mb-3">
					<div class="row no-gutters">
						<div class="col-md-4">
							<img src="https://picsum.photos/200?random=6" class="card-img" alt="...">
						</div>
						<div class="col-md-8">
							<div class="card-body">
								<h5 class="card-title">Card title</h5>
								<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
								<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Footer -->
<footer class="bg-warning">
	<div class="container">
		<div class="row mt-5 mb-3 mx-5">
			<div class="col-lg-4 col-md-4 col-sm-12">
				<h6 style="font-weight: 600;">About Only Wall</h6>
				<p class="mt-3" style="font-weight: 300; font-size: 10pt;">
					<b>Onlywall</b> menyediakan produk seperti baju, sepatu, pernak pernik pesta dan segala kebutuhan anda dengan harga kompetitif dan model terbaru.
				</p>
			</div>
			<div class=" col-lg-4 col-md-4 col-sm-12">
				<h6 style="font-weight: 600;">Contact Info</h6>
				<p style="font-weight: 300; font-size: 10pt;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde aliquid maiores a, libero placeat neque assumenda! Quam quasi fuga architecto nisi cum, consequatur suscipit officiis iure exercitationem quo aut eos.</p>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12">
				<h6 style="font-weight: 600;">Quick Links</h6>
				<p style="font-weight: 300; font-size: 10pt;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde aliquid maiores a, libero placeat neque assumenda! Quam quasi fuga architecto nisi cum, consequatur suscipit officiis iure exercitationem quo aut eos.</p>
			</div>
		</div>
		<div class="col-12 d-flex justify-content-center mb-5">
			<div class="row mx-0">
				<ion-icon style="font-size: 32px;" name="logo-facebook"></ion-icon>
				<ion-icon style="font-size: 32px;" name="logo-whatsapp"></ion-icon>
				<ion-icon style="font-size: 32px;" name="logo-instagram"></ion-icon>
			</div>
		</div>
	</div>
</footer>

<script>
	$("#carouselExampleCaptions").hide();
	$(window).on("load", function() {
		$.when($("#preloader").fadeOut(1000)).done(function() {
			$("#carouselExampleCaptions").fadeIn(1000);
			$(".spinner").remove();
		});
	});
	$("ion-icon").css("padding-right", "10px");
	$("LINK[href*='assets/css/sb-admin-2.min.css']").remove();
</script>

<?php $this->load->view('template/body_bawah') ?>