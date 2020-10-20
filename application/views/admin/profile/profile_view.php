<?php $this->load->view('template/body_atas'); ?>

<div id="wrapper">
    <?php $this->load->view("template/sidebar"); ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">
            <?php $this->load->view("template/top"); ?>
            <div class="container">
                <h3 class="ml-2" style="color: black;">Profile</h3>
                <?php
                echo $this->session->flashdata('message');
                ?>
                <div class="card mb-3 mt-5" style="max-width: 700px; color: black;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img class="card-img-top" style="width: 200px; height: 200px; object-fit: cover;" src="<?= base_url('upload/account/' . $user['image']); ?>" alt="Profile">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"><b><?= $user['nama']; ?> </b></h5>
                                <p style="font-size: 10pt;"><?= $user['email']; ?></p>
                                <p style="font-weight: 300;">Tgl Terdaftar : <?= $user['date_created']; ?></p>

                                <a href="#" class="mt-3 btn btn-info btn-sm" role="button" aria-pressed="true" data-toggle="modal" data-target="#modalUpload">Ubah Foto Profil</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <?php echo form_open_multipart('Profile/edit_foto'); ?>
            <div class="modal fade" id="modalUpload" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ubah Gambar</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="input-group mb-3">
                                <div class="custom-file" style="overflow-y: hidden;">
                                    <input name="image" type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>
            </div>
            <?= form_close(); ?>

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

    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
</script>
<?php $this->load->view('template/body_bawah'); ?>