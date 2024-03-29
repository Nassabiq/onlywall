<script>
    $('#owl-1').owlCarousel({
        loop: true,
        margin: 10,
        dots: false,
        autoHeight: true,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        mouseDrag: false,
        responsiveClass: true,
        touchDrag: false,
        responsive: {
            0: {
                items: 1
            },
            1000: {
                items: 3
            }
        }
    });

    $('#header').owlCarousel({
        loop: true,
        margin: 10,
        dots: false,
        autoHeight: true,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        mouseDrag: false,
        responsiveClass: true,
        touchDrag: false,
        responsive: {
            0: {
                items: 1
            },
            1000: {
                items: 3
            }
        }
    });

    $('#owl-2').owlCarousel({
        loop: true,
        margin: 10,
        dots: false,
        autoHeight: true,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        mouseDrag: false,
        items: 2,
        touchDrag: false,
        responsive: {
            0: {
                items: 1
            },
            1000: {
                items: 2
            }
        }
    });
    $('#owl-3').owlCarousel({
        loop: true,
        margin: 10,
        dots: false,
        autoHeight: true,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        mouseDrag: false,
        items: 3,
        touchDrag: false
    });

    new Splide('#image', {
        type: 'loop',
        perPage: 1,
    }).mount();

    new Splide('#homecarousel').mount();
</script>

<script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/addons/jquery/jquery.min.js'); ?>"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/addons/jquery-easing/jquery.easing.min.js'); ?>"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/js/sb-admin-2.min.js'); ?>"></script>

</body>

</html>