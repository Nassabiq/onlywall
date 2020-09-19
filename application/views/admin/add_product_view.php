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
                <h5 style="color: black;">Tambah Produk</h5>

                <div class="container mx-0 px-0 mt-4">
                    <?= form_open_multipart('Produk/add_produk'); ?>
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <label for="formGroupExampleInput" style="color: black; font-size: 11pt;" class="m-0"><small>Nama Produk</small></label>
                                <input class="form-control form-control-sm" type="text" name="nama_produk" placeholder="Nama Produk ...">
                                <small class="text-danger">
                                    <?= form_error('nama_produk'); ?>
                                </small>
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput" style="color: black; font-size: 11pt;" class="m-0"><small>Harga</small></label>
                                <input class="form-control form-control-sm" type="text" name="harga_produk" placeholder="Nama Produk ...">
                                <small class="text-danger">
                                    <?= form_error('nama_produk'); ?>
                                </small>
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput" style="color: black; font-size: 11pt;" class="m-0"><small>Kategori</small></label>
                                <select name="id_kategori" class="form-control form-control-sm  " id="exampleFormControlSelect1">
                                    <option value="0">Kategori</option>
                                    <?php foreach ($kategori as $row) : ?>
                                        <option value="<?php echo $row->id_kategori ?>"><?php echo $row->kategori; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <button type="submit" style="font-size: 12pt;" class="mt-1 btn btn-primary btn-user btn-small">
                                Post
                            </button>
                        </div>
                        <div class="col-8">
                            <div class="form-group purple-border px-5">
                                <label for="formGroupExampleInput" style="color: black; font-size: 11pt;" class="m-0"><small>Deskripsi Produk</small></label>
                                <textarea class="form-control" name="deskripsi" id="exampleFormControlTextarea4" rows="6"></textarea>
                            </div>
                            <div class="input-group px-5">
                                <div class="custom-file" style="overflow-y: hidden;">
                                    <input type="file" name="foto_produk" class="custom-file-" id="customFile" multiple>
                                    <label class="custom-file-label" for="customFile">Gambar Produk</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="gallery mt-3 px-5"></div>
                            </div>
                        </div>
                    </div>

                    <?= form_close(); ?>
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

    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });

    var imagesPreview = function(input, placeToInsertImagePreview) {

        if (input.files) {
            var filesAmount = input.files.length;

            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();

                reader.onload = function(event) {
                    $($.parseHTML('<img style="height: 150px; width : 150px; object-fit: cover; margin-left: 10px; margin-bottom: 10px;">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                }

                reader.readAsDataURL(input.files[i]);
            }
        }

    };
    $('#customFile').on('change', function() {
        imagesPreview(this, 'div.gallery');
    });
</script>
<?php $this->load->view('template/body_bawah') ?>