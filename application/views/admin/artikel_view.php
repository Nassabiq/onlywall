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
                <h3 class="ml-2">Artikel</h3>

                <!-- Modal -->
                <!-- Button trigger modal -->
                <div class="col-6">
                    <?php
                    echo $this->session->flashdata('message');
                    ?>
                    <button type="button" class=" m-0 btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalCenter">
                        Add Category
                    </button>
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
                                        <input type="text" name="kategori" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kategori...">
                                    </div>
                                    <div class="ok d-flex justify-content-end">
                                        <button type="button" class="btn btn-secondary mr-2" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
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
</script>
<?php $this->load->view('template/body_bawah') ?>