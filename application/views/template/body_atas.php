<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&family=Lobster+Two:wght@700&family=Poppins:wght@100..900&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/addons/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/css/sb-admin-2.min.css'); ?>" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">


    <script>
        (function(w, d, s, g, js, fs) {
            g = w.gapi || (w.gapi = {});
            g.analytics = {
                q: [],
                ready: function(f) {
                    this.q.push(f);
                }
            };
            js = d.createElement(s);
            fs = d.getElementsByTagName(s)[0];
            js.src = 'https://apis.google.com/js/platform.js';
            fs.parentNode.insertBefore(js, fs);
            js.onload = function() {
                g.load('analytics');
            };
        }(window, document, 'script'));
    </script>

    <style>
        * {
            font-family: 'Poppins', sans-serif;
            font-weight: 400;
            overflow-x: hidden;
        }

        .carousel-caption {
            /* -webkit-text-stroke: 2px white; */
            font-weight: bold;
            color: orange;
        }

        .spinner-grow {
            margin: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            /* transform: translate(-50%, -50%); */
        }

        .container .owl-carousel {
            /* display: flex;
            align-content: center; */
            width: 60%;
            float: none;
            margin: 0 auto;
        }

        .image-produk {
            opacity: 1;
            /* display: block; */
            transition: .5s ease;
            backface-visibility: hidden;
        }

        .hover-link {
            transition: .5s ease;
            opacity: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            text-align: center;
        }

        .item {
            background-color: #ebebeb;
        }

        .item:hover .image-produk {
            opacity: 0.2;
            overflow-y: hidden;
        }

        .item:hover>.hover-link {
            opacity: 1;
            cursor: pointer;
        }

        .owl-carousel {
            overflow-y: hidden;
        }

        .sosmed {
            text-decoration: none;
            color: black;
        }

        .icon-wa:hover {
            color: green;
        }

        .icon-ig:hover {
            color: #ff007b;
        }

        .link {
            color: black;
            text-decoration: none;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            overflow-x: visible;
        }

        .text-sosmed {
            text-decoration: none;
        }

        .img-background {
            width: 42vw;
        }

        .img-logo {
            width: 22vw;
        }

        @media screen and (max-width: 800px) {

            .img-background {
                width: 90vw;
            }

            .img-logo {
                width: 80vw;
            }
        }
    </style>

    <title> <?php echo $title; ?> </title>
</head>

<body>