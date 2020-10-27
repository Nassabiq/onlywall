<?php $this->load->view('template/body_atas') ?>
<?php $this->load->view('template/navbar') ?>

<div class="container mt-3 mb-5">
    <p>
        <h2>Artikel Terbaru</h2>
        yang ada di Only Wall
    </p>
    <div class="col-lg-8">
        <?php if ($artikel == null) : ?>

        <?php else : ?>
            <?php foreach ($artikel as $a) : ?>
                <div class="row my-3 p-2" style="background-color: #f7f7f7; border-radius: 25px; box-shadow: 2px 3px #d4cfcf;">
                    <div class="col-lg-4">
                        <img src="<?= base_url('upload/thumbnails/') .  $a->thumbnail; ?>" style="width: 300px; height: 200px; object-fit: cover;" class="card-img" alt="...">
                    </div>
                    <div class="col-lg-8 mt-3">
                        <a style="text-decoration: none;" href="<?= base_url('/Home/showArtikel/') . encrypt_url($a->id_artikel); ?>">
                            <h5 class="card-title"><?= $a->judul_artikel; ?></h5>
                        </a>
                        <p><?= htmlspecialchars_decode(word_limiter($a->konten, 20)); ?> <small><a href="<?= base_url('/Home/showArtikel/') . encrypt_url($a->id_artikel); ?>">Read More</a></small></p>
                        <p><small><?= $a->tgl_upload; ?></small></p>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
        <div class="row">
            <div class="col">
                <p>
                    <?= $this->pagination->create_links(); ?>
                </p>
            </div>
        </div>
    </div>
</div>


<?php $this->load->view('template/footer'); ?>
<script>
    $("LINK[href*='assets/css/sb-admin-2.min.css']").remove();
</script>
<?php $this->load->view('template/body_bawah') ?>