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
                <h3 class="ml-2" style="color: black;">Account</h3>

                <div class="col-lg-10  col-md-12 mt-4">

                    <?php
                    echo $this->session->flashdata('message');
                    ?>
                    <div class="container d-flex justify-content-end mx-2">
                        <a type="button" href="<?= base_url('Account/addAccount'); ?>" class="mx-2 btn btn-info btn-sm">
                            <i class="fa fa-fw fa-plus" style="vertical-align: middle;" aria-hidden="true"></i>
                            Tambah Akun
                        </a>
                    </div>

                    <table class="table table-striped mt-4">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Akun</th>
                                <th scope="col">Email</th>
                                <th scope="col">Role</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <?php $a = 1; ?>
                        <tbody style="color: black;">
                            <?php foreach ($role as $r) : ?>
                                <tr>
                                    <th scope="row"><?= $a++; ?></th>
                                    <td><?= $r->nama; ?></td>
                                    <td><?= $r->email; ?></td>
                                    <td><?= $r->role; ?></td>
                                    <td>
                                        <!-- Edit -->
                                        <a href="<?= base_url('Account/edit_akun/') . $r->id_user; ?>" class="btn btn-sm btn-primary">
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
                    </table>

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
                                    Data yang dihapus tidak bisa dikembalikan
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                                    <a type="button" href="<?= base_url('Account/delete_akun/') . $r->id_user; ?>" class="btn btn-primary btn-sm text-white">Delete</a>
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

    const tex = $("#text");
    $.parseHTML(tex);
</script>
<?php $this->load->view('template/body_bawah'); ?>