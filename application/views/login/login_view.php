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
                                    <p style="font-size: 11pt;" class="mt-0">Welcome !! Please Login</p>
                                </div>
                                <?php
                                echo $this->session->flashdata('message');
                                ?>
                                <form class="user" method="post" action="<?= base_url('OwLogin'); ?>">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control form-control-user" value="<?= set_value('email'); ?>" id="email" placeholder="Email...">
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control form-control-user" id="password" placeholder="Password..">
                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="row">
                                        <div class="col-3"></div>
                                        <div class="col-6">
                                            <button href="<?= base_url('OwLogin'); ?>" style="font-family: 'Lobster Two', cursive; font-size: 16pt;" class="mt-5 btn btn-warning btn-user btn-block">
                                                Login
                                            </button>
                                        </div>
                                        <div class="col-3"></div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-center mt-3">
                                        <a class="text-center" href="<?= base_url(); ?>"> <small> Kembali ke Home </small></a>
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