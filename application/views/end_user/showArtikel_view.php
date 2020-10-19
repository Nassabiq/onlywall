<?php $this->load->view('template/body_atas') ?>
<?php $this->load->view('template/navbar') ?>


<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">
        <div class="container my-5  ">
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
                    <div class="konten mt-2" style="color: black;">
                        <?= htmlspecialchars_decode($artikel['konten']); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php $this->load->view('template/footer'); ?>
<script>
    $("ion-icon").css("padding-right", "10px");
    $("LINK[href*='assets/css/sb-admin-2.min.css']").remove();
</script>
<?php $this->load->view('template/body_bawah'); ?>