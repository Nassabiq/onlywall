<nav class="navbar navbar-expand-lg navbar-dark bg-primary" id="navbar-user">
  <div class="container">
    <a class="navbar-brand mr-5" href="<?= base_url(); ?>"><img class="ml-2" style="width: 150px;" src="<?= base_url('/upload/LOGO-ONLYWALL.png'); ?>" alt="OwLogo"></a>

    <!-- Toggle Responsive -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Menu -->
    <div class="collapse navbar-collapse justify-content-end" style="font-family: 'Poppins', sans-serif; font-size: 12pt; font-weight: bold;" id="navbarNav">
      <ul class="navbar-nav form-inline" id="nav">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url(''); ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('/Home/produk'); ?>">Produk</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('/Home/news'); ?>">News</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('/Home/contact'); ?>">Contact Us</a>
        </li>
      </ul>

    </div>

    <!-- Akhir Menu -->

  </div>
</nav>

<script>
  $(function($) {
    let url = window.location.href;
    $('nav ul li a').each(function() {
      if (this.href === url) {
        $(this).addClass('active');
      }
    });
  });
</script>