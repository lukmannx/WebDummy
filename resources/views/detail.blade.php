<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>ABC Company</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('img/lugu.png')}}" rel="icon">
    <link href="{{asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon>">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- SwiperJs -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Vendor CSS Files -->
    <link href="{{asset('vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Online Vendor CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <!-- Template Main CSS File -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <!-- =======================================================
  * Template Name: Gp
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

</head>
<style>
    .news-block {
        min-height: 200px;
    }

    .news-block img {
        width: 40%;
        height: auto;
        float: left;
        margin: 0 20px 10px 0;
    }

    ol {
        background-color: transparent !important;
        font-style: italic;
    }

    .clear {
        clear: both;
    }

    .card-news img {
        width: 100%;
        height: auto;
        float: left;
        margin: 0 20px 10px 0;
    }

    .card-news h5 {
        font-size: 17px;
        font-weight: bold;
    }

    .card-news p {
        font-size: 12px;
    }

    .sosmed {
        width: 50px
    }

    /*# sourceMappingURL=news.css.map */

</style>

<body>
    <br>

    <div class="section-news-detail mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/berita">back</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Library</li>
                    </ol>


                    <div class="news-block">

                        <img src="{{asset('/storage/images/berita/'.$item->photo)}}">

                        <h3 class="fw-bold mb-4">{{$data->judul}}</h3>
                        <p class="fs-4">{{$data->deskripsi}}</p>
                        <p>{{$data->creted_at}}</p>

                    </div>
                    <div class="clear">
                    </div>

                    <div class="footer-news">
                        <div class="row">

                        </div>
                        <p>Penulis : <span>{{$data->penulis}}</span>


                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
</body>

</html>
