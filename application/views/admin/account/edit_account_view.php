<?php $this->load->view('template/body_atas'); ?>
<?php $this->load->view('template/navbar'); ?>

<div id="wrapper">
    <?php $this->load->view("template/sidebar"); ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">
            <?php $this->load->view("template/top"); ?>
            <div class="container">
                <h3 class="ml-2" style="color: black;">Edit Account</h3>

                <?php
                echo $this->session->flashdata('message');
                ?>
                <?= form_open_multipart('Account/edit_akun/' . $akun['id_user']); ?>

                <div class="row">

                    <div class="col-lg-6 col-md-12 mt-5">

                        <input type="hidden" name="id_user" value="<?= $akun['id_user']; ?>">
                        <div class="form-group">
                            <label for="formGroupExampleInput" style="color: black; font-size: 11pt;" class="m-0"><small>Nama</small></label>
                            <input type="text" name="nama" value="<?= $akun['nama']; ?>" class="form-control" id="username" aria-describedby="username" placeholder="Username...">
                            <small class="text-danger">
                                <?= form_error('nama'); ?>
                            </small>
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput" style="color: black; font-size: 11pt;" class="m-0"><small>Email</small></label>
                            <input type="email" name="email" class="form-control" value="<?= $akun['email']; ?>" id="email" readonly>
                            <small class="text-danger">
                                <?= form_error('email'); ?>
                            </small>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="formGroupExampleInput" style="color: black; font-size: 11pt;" class="m-0"><small>Password</small></label>
                                    <input type="password" name="password1" class="form-control" id="password1" placeholder="Password..">
                                    <small class="text-danger">
                                        <?= form_error('password1'); ?>
                                    </small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="formGroupExampleInput" style="color: black; font-size: 11pt;" class="m-0"><small>_</small></label>
                                    <input type="password" name="password2" class="form-control" id="password2" placeholder="Ulangi Password..">
                                </div>
                            </div>
                        </div>
                        <div class="custom-file " style="overflow-y: hidden;">
                            <input type="file" value="<?= $akun['image']; ?>" name="image" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile"><?= $akun['image']; ?></label>
                        </div>
                        <button type="submit" style="font-size: 16pt;" class="mt-2 btn btn-info btn-block">
                            Edit
                        </button>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <img style="height: 250px; width: 250px;" src="<?= base_url('upload/account/') . $akun['image']; ?>" alt="">
                    </div>
                </div>
                <?= form_close(); ?>
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

    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
</script>
<?php $this->load->view('template/body_bawah'); ?>