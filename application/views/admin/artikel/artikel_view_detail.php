<?php $this->load->view('template/body_atas'); ?>

<div id="wrapper">
    <?php $this->load->view("template/sidebar"); ?>

    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">
            <?php $this->load->view("template/top"); ?>

            <div class="container">
                <div class="row">
                    <div class="col-5">
                        <span>
                            <img style="width: 600px; height: 300px; object-fit: cover;" src="<?= site_url('/upload/thumbnails/') . $artikel['thumbnail']; ?>" alt="OwArtikel-Image" srcset="">
                        </span>
                    </div>
                    <div class="col-7">
                        <h1 style="color: black;"><?= $artikel['judul_artikel']; ?></h1>
                        <div class="tgl-publish">
                            <p class="mt-1" style="font-size: 10pt; color: black;"> <b> Di Upload pada :</b> <?= $artikel['tgl_upload']; ?> | <b>Kategori : </b> <?= $artikel['kategori']; ?></p>
                        </div>
                        <div class="konten mt-5" style="color: black;">
                            <?= htmlspecialchars_decode($artikel['konten']); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $("#navbar-user").remove();
    $("body").attr("id", "page-top");
</script>
<?php $this->load->view('template/body_bawah') ?>