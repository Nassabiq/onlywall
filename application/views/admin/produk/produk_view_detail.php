<?php $this->load->view('template/body_atas'); ?>


<div id="wrapper">
    <?php $this->load->view("template/sidebar"); ?>

    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">
            <?php $this->load->view("template/top"); ?>

            <div class="container mb-5">
                <div class="row">
                    <div class="col-4">
                        <!-- carousel -->
                        <?php
                        $image = json_decode($produk['foto_produk']);
                        ?>
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <?php
                                $class = ' active';
                                foreach ($image as $obj) : ?>
                                    <div class="carousel-item <?= $class; ?>" data-interval="3000">
                                        <img class="item" style="object-fit: cover; height: 350px; width: 350px;" src="<?= base_url('/upload/produk/') . $obj->image; ?>" alt="OwProduk-Image">
                                    </div>
                                <?php
                                    $class = '';
                                endforeach; ?>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <div class="link-wa mt-2">
                            <a class="btn btn-success mt-3" href="https://api.whatsapp.com/send?phone=6285773406307" role="button"><i style="vertical-align: middle;" class="mr-2 fab fa-fw fa-whatsapp" aria-hidden="true"></i>Pesan di WhatsApp</a>
                        </div>
                    </div>
                    <div class="col-8" style="margin-top: 40px;">
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
                                <tr>
                                    <td>
                                        <p style="color: black;"><small> Tanggal Upload</small></p>
                                    </td>
                                    <td>
                                        <p class="ml-3"><small>:</small></p>
                                    </td>
                                    <td>
                                        <p style="color: black;" class="ml-2"><?= $produk['published_at']; ?></p>
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
                    <div class="row">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $("#navbar-user").remove();
    $("body").attr("id", "page-top");

    $('.owl-carousel').owlCarousel({
        loop: true,
        items: 1,
        dots: false,
        autoplay: true

    })
</script>
<?php $this->load->view('template/body_bawah') ?>