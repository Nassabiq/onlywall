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
            <!-- End of Topbar -->
            <div class="container">
                <h5 class="ml-2" style="color:black;">Tambah Artikel</h5>
                <?= form_open_multipart('Admin/add_artikel'); ?>
                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label for="formGroupExampleInput" style="color: black; font-size: 11pt;" class="m-0"><small>Judul Artikel</small></label>
                            <input class="form-control" type="text" name="judul_artikel" placeholder="Judul Artikel ...">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput" style="color: black; font-size: 11pt;" class="m-0"><small>Kategori</small></label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>Kategori</option>
                                <?php foreach ($kategori as $row) : ?>
                                    <option value="<?php echo $row->id_kategori ?>"><?php echo $row->kategori; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="custom-file" style="overflow-y: hidden;">
                            <input type="file" name="konten" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Thumbnails</label>
                        </div>
                        <button type="submit" href="<?= base_url(''); ?>" style="font-size: 12pt;" class="mt-1 btn btn-primary btn-user btn-small">
                            Post
                        </button>
                    </div>
                    <div class="col-8">
                        <textarea id="ckeditor" name="konten" style="height: 400px;"></textarea>
                    </div>
                </div>
                </form>
            </div>

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


<script type='text/javascript' src='<?php echo base_url(); ?>assets/ckeditor/ckeditor.js'></script>
<script>
    $("#navbar-user").remove();
    $("body").attr("id", "page-top");

    var ckeditor = CKEDITOR.replace('ckeditor', {
        height: '300px'
    });

    CKEDITOR.disableAutoInline = true;
    CKEDITOR.inline('editable');

    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
</script>
<?php $this->load->view('template/body_bawah') ?>