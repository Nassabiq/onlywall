<?php $this->load->view('template/body_atas'); ?>

<div id="wrapper">
    <?php $this->load->view("template/sidebar"); ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">
            <?php $this->load->view("template/top"); ?>
            <div class="container">
                <h3 class="ml-2" style="color: black;">Add Account</h3>

                <div class="col-lg-6 col-md-12 mt-5">
                    <?php
                    echo $this->session->flashdata('message');
                    ?>
                    <form class="user" method="post" action="<?= base_url("Account/addAccount") ?>">
                        <div class="form-group">
                            <input type="text" name="nama" value="<?= set_value('nama'); ?>" class="form-control" id="username" aria-describedby="username" placeholder="Username...">
                            <small class="text-danger">
                                <?= form_error('nama'); ?>
                            </small>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" value="<?= set_value('email'); ?>" id="email" placeholder="Email...">
                            <small class="text-danger">
                                <?= form_error('email'); ?>
                            </small>
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput" style="color: black; font-size: 11pt;" class="m-0"><small>Role</small></label>
                            <select name="role_id" class="form-control form-control-sm  " id="exampleFormControlSelect1">
                                <option value="0">Role</option>
                                <?php foreach ($akses as $a) : ?>
                                    <option value="<?php echo $a->id_role ?>"><?php echo $a->role; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-6">
                                <div class="form-group">
                                    <input type="password" name="password1" class="form-control" id="password1" placeholder="Password..">
                                    <small class="text-danger">
                                        <?= form_error('password1'); ?>
                                    </small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <input type="password" name="password2" class="form-control" id="password2" placeholder="Ulangi Password..">
                                </div>
                            </div>
                            <button type="submit" href="<?= site_url('OwLogin/register'); ?>" style="font-size: 16pt;" class="mt-2 btn btn-info btn-block">
                                Register
                            </button>
                        </div>

                    </form>

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