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
                    <a type="button" href="<?= base_url('Admin/add_artikel'); ?>" class="mx-2 btn btn-success btn-sm">
                        <i class="fa fa-fw fa-plus" style="vertical-align: middle;" aria-hidden="true"></i>
                        Tambah Artikel
                    </a>
                </div>

                <!-- Modal -->
                <form action="<?= base_url('Admin/add_kategori'); ?>" method="post">
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
                                <th style="width: 20%;">Judul</th>
                                <th style="width: 30%;">Konten</th>
                                <th style="width: 15%;">Kategori</th>
                                <th style="width: 15%;">Tgl Publikasi</th>
                                <th style="width: 15%;">Action</th>

                            </tr>
                        </thead>
                        <?php $a = 1; ?>
                        <tbody class="table-bordered" style="background-color: #e6e6e6; color: black;">
                            <?php foreach ($artikel_post as $row) : ?>
                                <tr>
                                    <th scope="row"><?= $a++; ?></th>
                                    <td><?= $row->judul_artikel; ?></td>
                                    <td style="width: 10%;" class="text-wrap"><?= htmlspecialchars_decode($row->konten); ?></td>
                                    <td><?= $row->kategori; ?></td>
                                    <td><?= $row->tgl_upload; ?></td>
                                    <td>
                                        <a href="<?= base_url('Admin/edit_artikel/') . $row->id_artikel; ?>" class="btn btn-sm btn-primary"> Edit </a>
                                        <a href="" class="btn btn-sm btn-danger"> <i class="fa fa-fw fa-trash" aria-hidden="true"></i> </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
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

    const tex = $("#text");
    $.parseHTML(tex);
</script>
<?php $this->load->view('template/body_bawah') ?>