<?php $this->load->view('template/body_atas'); ?>
<?php $this->load->view('template/navbar'); ?>

<!-- Page Wrapper -->
<div id="wrapper">
    <?php $this->load->view("template/sidebar"); ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">
            <?php $this->load->view("template/top"); ?>
            <div class="container">
                <h3 class="ml-2" style="color: black;">Produk</h3>

                <!-- Modal -->
                <!-- Button trigger modal -->
                <?php
                echo $this->session->flashdata('message');
                ?>
                <div class="container d-flex justify-content-end mx-2">
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalCenter">
                        <i class="fa fa-fw fa-plus" style="vertical-align: middle;" aria-hidden="true"></i>
                        Tambah Kategori
                    </button>
                    <a type="button" href="<?= base_url('Produk/add_product'); ?>" class="mx-2 btn btn-success btn-sm">
                        <i class="fa fa-fw fa-plus" style="vertical-align: middle;" aria-hidden="true"></i>
                        Tambah Produk
                    </a>
                </div>

                <!-- Modal -->
                <form action="<?= base_url('Produk/add_kategori'); ?>" method="post">
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h6 class="modal-title" id="exampleModalLongTitle">Tambah Kategori</h6>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <input type="text" name="kategori" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kategori...">
                                    </div>
                                    <div class="ok d-flex justify-content-end">
                                        <button type="button" class="btn btn-sm btn-secondary mr-2" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-sm btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                <!-- List Artikel -->
                <div class="col mt-4">
                    <table class="table table-hover" style="table-layout: fixed; width: 100%;">
                        <thead class="bg-warning text-white">
                            <tr>
                                <th style="width: 3%;">No</th>
                                <th style="width: 15%;">Nama Produk</th>
                                <th style="width: 20%;">Deskripsi</th>
                                <th style="width: 10%;">Harga</th>
                                <th style="width: 10%;">Kategori</th>
                                <th style="width: 15%;">Tgl Post</th>
                                <th style="width: 20%;">Action</th>

                            </tr>
                        </thead>
                        <?php $a = 1; ?>
                        <?php if ($produk == null) : ?>
                            <tbody>

                            </tbody>
                        <?php else : ?>
                            <tbody class="table-bordered" style="background-color: #e6e6e6; color: black;">
                                <?php foreach ($produk as $row) : ?>
                                    <tr>
                                        <th scope="row"><?= $a++; ?></th>
                                        <td><?= $row->nama_produk; ?></td>
                                        <td style="width: 10%;" class="text-wrap"><?= htmlspecialchars_decode(word_limiter($row->deskripsi, 10)); ?></td>
                                        <td><?= $row->harga; ?></td>
                                        <td><?= $row->kategori; ?></td>
                                        <td><?= $row->published_at; ?></td>
                                        <td>
                                            <!-- View -->
                                            <a href="<?= base_url('Produk/showProdukDetail/') . $row->id_produk; ?>" class="btn btn-sm btn-success">
                                                <i style="vertical-align: middle;" class="fa fa-fw fa-eye" aria-hidden="true"></i>
                                                Lihat
                                            </a>

                                            <!-- Edit -->
                                            <a href="<?= base_url('Produk/edit_produk/') . $row->id_produk; ?>" class="btn btn-sm btn-primary">
                                                <i style="vertical-align: middle;" class="fas fa-fw fa-edit" aria-hidden="true"></i>
                                                Edit
                                            </a>

                                            <!-- Delete -->
                                            <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#exampleModal">
                                                <i style="vertical-align: middle;" class="fa fa-fw fa-trash" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        <?php endif; ?>
                    </table>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="color: black;">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"><b> Apakah Anda ingin menghapusnya? </b></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body" style="font-size: 10pt;">
                                    Artikel yang dihapus tidak bisa dikembalikan
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                                    <a type="button" href="<?= base_url('Produk/delete_produk/') . $row->id_produk; ?>" class="btn btn-primary btn-sm text-white">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- End of Topbar -->
        </div>

        <!-- End of Main Content -->
    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<script>
    $("#navbar-user").remove();
    $("body").attr("id", "page-top");

    $(".clickable-row").click(function() {
        window.location = $(this).data("href");
    });

    const tex = $("#text");
    $.parseHTML(tex);
</script>
<?php $this->load->view('template/body_bawah') ?>