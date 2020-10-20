<?php $this->load->view('template/body_atas') ?>
<?php $this->load->view('template/navbar') ?>
<div class="container mt-3 mb-5">
    <p>
        <h2>Produk</h2> yang ada di Only Wall
    </p>
    <div class="row d-flex justify-content-center">
        <?php foreach ($produk as $p) : ?>
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
        <?php endforeach; ?>
    </div>
</div>
</div>

<?php $this->load->view('template/footer'); ?>
<script>
    $("LINK[href*='assets/css/sb-admin-2.min.css']").remove();
</script>

<?php $this->load->view('template/body_bawah') ?>