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
                <h3 class="ml-2" style="color: black;">Artikel</h3>

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
                    <a type="button" href="<?= base_url('Artikel/add_artikel'); ?>" class="mx-2 btn btn-success btn-sm">
                        <i class="fa fa-fw fa-plus" style="vertical-align: middle;" aria-hidden="true"></i>
                        Tambah Artikel
                    </a>
                </div>

                <!-- Modal -->
                <form action="<?= base_url('Artikel/add_kategori'); ?>" method="post">
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
                                <th style="width: 15%;">Judul</th>
                                <th style="width: 30%;">Konten</th>
                                <th style="width: 15%;">Kategori</th>
                                <th style="width: 15%;">Tgl Publikasi</th>
                                <th style="width: 20%;">Action</th>

                            </tr>
                        </thead>
                        <?php $a = 1; ?>
                        <?php if ($artikel_post == null) : ?>
                            <tbody>

                            </tbody>
                        <?php else : ?>
                            <tbody class="table-bordered" style="background-color: #e6e6e6; color: black;">
                                <?php foreach ($artikel_post as $row) : ?>
                                    <tr>
                                        <th scope="row"><?= $a++; ?></th>
                                        <td style="font-weight: 600;"> <?= $row->judul_artikel; ?></td>
                                        <td style="font-size: 10pt; width: 10%;" class="text-wrap"><?= htmlspecialchars_decode(word_limiter($row->konten, 10)); ?></td>
                                        <td><?= $row->kategori; ?></td>
                                        <td><?= date('d-M-Y', strtotime($row->tgl_upload)); ?></td>
                                        <td>
                                            <!-- View -->
                                            <a href="<?= base_url('Artikel/showArtikelDetail/') . $row->id_artikel; ?>" class="btn btn-sm btn-success">
                                                <i style="vertical-align: middle;" class="fa fa-fw fa-eye" aria-hidden="true"></i>
                                                Lihat
                                            </a>

                                            <!-- Edit -->
                                            <a href="<?= base_url('Artikel/edit_artikel/') . $row->id_artikel; ?>" class="btn btn-sm btn-primary">
                                                <i style="vertical-align: middle;" class="fas fa-fw fa-edit" aria-hidden="true"></i>
                                                Edit
                                            </a>

                                            <!-- Delete -->
                                            <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#exampleModal">
                                                <i class="fa fa-fw fa-trash" aria-hidden="true"></i>
                                            </button>
                                        </td>

                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        <?php endif; ?>
                    </table>
                    <div class="row">
                        <div class="col">
                            <p>
                                <?= $this->pagination->create_links(); ?>
                            </p>
                        </div>
                    </div>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="color: black;">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Apakah Anda ingin menghapusnya?</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Artikel yang dihapus tidak bisa dikembalikan
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                                    <a type="button" href="<?= base_url('Artikel/delete_artikel/') . $row->id_artikel; ?>" class="btn btn-primary btn-sm text-white">Delete</a>
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
<a class="scroll-to-top rounded" style="overflow-y: hidden;" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<script>
    $("#navbar-user").remove();
    $("body").attr("id", "page-top");

    const tex = $("#text");
    $.parseHTML(tex);
</script>
<?php $this->load->view('template/body_bawah') ?>