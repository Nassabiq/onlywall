<?php $this->load->view('template/body_atas') ?>
<?php $this->load->view('template/navbar') ?>
<style>
    body {
        background-color: #e6ebfa;
    }
</style>

<div class="container mt-3">
    <div class="row d-flex justify-content-center">
        <div class="col-lg-7 col-md-12">
            <img class="img-background" src="<?= base_url('upload/back.png'); ?>">
        </div>
        <div class="col-lg-5 col-md-12" style="margin: auto;">
            <img class="img-logo" src="<?= base_url('upload/LOGO-ONLYWALL.png'); ?>">
            <p class="mt-3" style="font-weight: 400; font-size: 12pt;">
                <b>Onlywall</b> menyediakan produk seperti baju, sepatu, pernak pernik pesta dan segala kebutuhan anda dengan harga kompetitif dan model terbaru.
            </p>
            <a class="sosmed icon-wa" href="https://api.whatsapp.com/send?phone=6285773406307">
                <div class="row mt-5 mx-0">
                    <ion-icon style="font-size: 32px; color: green;" name="logo-whatsapp"></ion-icon>
                    <p class="ml-3" style="font-size: 14pt;">085773406307</p>
                </div>
            </a>
            <a class="sosmed icon-ig" href="https://www.instagram.com/onlywall_official/">
                <div class="row mx-0">
                    <ion-icon style="font-size: 32px; color: #ff007b;" name="logo-instagram"></ion-icon>
                    <p class="ml-3" style="font-size: 14pt;"> @onlywall_official </p>
                </div>
            </a>
            <a class="sosmed icon-linktree" href="https://linktr.ee/onlywall">
                <div class="row mx-0">
                    <ion-icon style="font-size: 32px; color: blue;" name="globe-outline"></ion-icon>
                    <p class="ml-3" style="font-size: 14pt;"> Our Shop (Tokopedia & Shopee) </p>
                </div>
            </a>
        </div>
    </div>
</div>

<?php // $this->load->view('template/footer'); 
?>
<script>
    $(" LINK[href*='assets/css/sb-admin-2.min.css' ]").remove();
</script> <?php $this->load->view('template/body_bawah') ?>