<?php $this->load->view('template/body_atas') ?>
<?php $this->load->view('template/navbar') ?>


<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">
        <div class="container mt-2 my-5  ">
            <img class="w-100" style="height: 400px; object-fit: cover;" src="<?= site_url('/upload/thumbnails/') . $artikel['thumbnail']; ?>" alt="OwArtikel-Image" srcset="">
            <div class="row mt-3">
                <div class="col-lg-8 col-md-12">
                    <h1 style="color: black;"><?= $artikel['judul_artikel']; ?></h1>
                    <div class="tgl-publish">
                        <p class="mt-1" style="font-size: 10pt; color: black;"> <b> Di Upload pada :</b> <?= $artikel['tgl_upload']; ?> | <b>Kategori : </b> <?= $artikel['kategori']; ?></p>
                    </div>
                    <div class="konten mt-2 pr-5" style="color: black; text-align: justify;
  text-justify: inter-word;">
                        <?= htmlspecialchars_decode($artikel['konten']); ?>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 mt-5">
                    <h5 class="mb-4">Related Post</h5>
                    <?php foreach ($similar as $row) : ?>
                        <?php foreach ($row as $r) :  ?>
                            <p class="my-1">
                                <a class="relatedd" style="color: black;" href=" <?= base_url('/Home/showArtikel/') . encrypt_url($r->id_artikel); ?>"> <?= $r->judul_artikel; ?> </a>
                            </p>
                        <?php endforeach; ?>
                    <?php endforeach; ?>
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