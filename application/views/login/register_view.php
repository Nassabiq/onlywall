<?php $this->load->view('template/body_atas') ?>
<?php $this->load->view('template/navbar') ?>
<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-6 col-lg-6 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4" style="font-family: 'Lobster Two', cursive; font-size: 32pt;">Only Wall</h1>
                                    <p style="font-size: 11pt;" class="mt-0">Register an Account</p>
                                </div>
                                <?php
                                echo $this->session->flashdata('message');
                                ?>
                                <form class="user" method="post" action="<?= base_url("OwLogin/register") ?>">
                                    <div class="form-group">
                                        <input type="text" name="nama" value="<?= set_value('nama'); ?>" class="form-control form-control-user" id="username" aria-describedby="username" placeholder="Username...">
                                        <small class="text-danger">
                                            <?= form_error('nama'); ?>
                                        </small>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control form-control-user" value="<?= set_value('email'); ?>" id="email" placeholder="Email...">
                                        <small class="text-danger">
                                            <?= form_error('email'); ?>
                                        </small>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <input type="password" name="password1" class="form-control form-control-user" id="password1" placeholder="Password..">
                                                <small class="text-danger">
                                                    <?= form_error('password1'); ?>
                                                </small>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <input type="password" name="password2" class="form-control form-control-user" id="password2" placeholder="Ulangi Password..">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3"></div>
                                        <div class="col-6">
                                            <button type="submit" href="<?= site_url('OwLogin/register'); ?>" style="font-family: 'Lobster Two', cursive; font-size: 16pt;" class="mt-2 btn btn-warning btn-user btn-block">
                                                Register
                                            </button>
                                        </div>
                                        <div class="col-3"></div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-center mt-3">
                                        <a class="text-center" href="<?= base_url('OwLogin'); ?>"> <small> Login Ngene </small></a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
<script>
    $("body").css("background-color", "#c9deff");
    $("nav").remove();
</script>

<?php $this->load->view('template/body_bawah') ?>