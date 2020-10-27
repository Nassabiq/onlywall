<?php $this->load->view('template/body_atas') ?>
<?php $this->load->view('template/navbar') ?>

<div id="wrapper">
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">
            <div class="container mt-1 my-5">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <?php
                        $image = json_decode($produk['foto_produk']);
                        ?>
                        <div class="splide" id="image">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    <?php
                                    foreach ($image as $obj) : ?>
                                        <div class="splide__slide d-flex justify-content-center">
                                            <img class="item" style="object-fit: cover; height: 350px; width: 350px;" src="<?= base_url('/upload/produk/') . $obj->image; ?>" alt="OwProduk-Image">
                                        </div>
                                    <?php
                                    endforeach; ?>
                                </ul>
                            </div>
                        </div>
                        <!-- carousel -->

                        <div class="link-wa d-flex justify-content-center">
                            <a class="btn btn-success mt-3" href="https://api.whatsapp.com/send?phone=6285773406307" role="button"><i style="vertical-align: middle;" class="mr-2 fab fa-fw fa-whatsapp" aria-hidden="true"></i>Pesan di WhatsApp</a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12" style="margin-top: 40px;">
                        <h3 style="color: black;"><?= $produk['nama_produk']; ?></h3>
                        <h1 style="color: black;">Rp. <?= number_format($produk['harga']); ?></h1>
                        <table>
                            <tbody>
                                <tr>
                                    <td>
                                        <p style="color: black;"><small>Kategori</small></p>
                                    </td>
                                    <td>
                                        <p class="ml-3"><small>:</small></p>
                                    </td>
                                    <td>
                                        <p style="color: black;" class="ml-2"><?= $produk['kategori']; ?></p>
                                    </td>
                                </tr>
                                <tr valign="top">
                                    <td>
                                        <p style="color: black;"><small> Deskripsi</small></p>
                                    </td>
                                    <td>
                                        <p class="ml-3"><small>:</small></p>
                                    </td>
                                    <td style="color: black;"><?= htmlspecialchars_decode($produk['deskripsi']); ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
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