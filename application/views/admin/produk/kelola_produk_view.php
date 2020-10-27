<?php $this->load->view('template/body_atas'); ?>

<!-- Page Wrapper -->
<div id="wrapper">
    <?php $this->load->view("template/sidebar"); ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">
            <?php $this->load->view("template/top"); ?>
            <div class="container">
                <h3 class="ml-2" style="color: black;">Kategori Produk</h3>

                <!-- Modal -->
                <!-- Button trigger modal -->
                <?php
                echo $this->session->flashdata('message');
                ?>
                <div class="container d-flex justify-content-start mx-0 px-2">
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
                <div class="col-lg-5 mt-4">
                    <table class="table table-hover">
                        <thead class="bg-warning text-white">
                            <tr>
                                <th>No</th>
                                <th>Kategori</th>
                                <th></th>
                            </tr>
                        </thead>
                        <?php $a = 1; ?>
                        <?php if ($kategori == null) : ?>
                            <tbody>

                            </tbody>
                        <?php else : ?>
                            <tbody class="table-bordered" style="background-color: #e6e6e6; color: black;">
                                <?php foreach ($kategori as $row) : ?>
                                    <tr>
                                        <th><?= $a++; ?></th>
                                        <td><?= $row->kategori; ?></td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete_modal<?= $row->id_kategori ?>">
                                                <i style="vertical-align: middle;" class="fa fa-fw fa-window-close" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="delete_modal<?= $row->id_kategori; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="color: black;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel"><b> Apakah Anda ingin menghapusnya? </b></h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body" style="font-size: 10pt;">
                                                    Kategori yang dihapus tidak bisa dikembalikan
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                                                    <a type="button" href="<?= base_url('Produk/delete_kategori/') . $row->id_kategori; ?>" class="btn btn-primary btn-sm text-white">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </tbody>
                        <?php endif; ?>
                    </table>
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