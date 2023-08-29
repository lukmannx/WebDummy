<!DOCTYPE html>
<html lang="en">

<head>
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

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center justify-content-lg-between">

            <h1 class="logo me-auto me-lg-0"><a href="index.html"><img src="{{asset('img/lugu.png ')}}"
                        alt=""><span></span></a></h1>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#services">Services</a></li>
                    <li><a class="nav-link scrollto" href="#Berita">News</a></li>
                    <li><a class="nav-link scrollto " href="#portfolio">Product</a></li>
                    <li><a class="nav-link scrollto" href="#testimonials">Testimoni</a></li>
                    <li><a class="nav-link scrollto" href="#team">Team</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
            </nav>
            <!-- .navbar -->

            <nav class="navbar">
                <a href="/login" class="get-started-btn scrollto py-2 px-4">Login</a>
                <a href="/register" class="scrollto">Register</a>
            </nav>

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center justify-content-center">
        <div class="container" data-aos="fade-up">

            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
                <div class="col-xl-6 col-lg-8">
                    <h1>Powerful Digital Solutions With ABC<span>.</span></h1>
                    <h2>We are <span class="auto-type">programmer</span></h2>
                </div>
            </div>


        </div>

        </div>
    </section><!-- End Hero -->


    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about mt-5">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-6 ms-5 justify-content-center d-flex align-items-center order-1 order-lg-2"
                        data-aos="fade-left" data-aos-delay="100">
                        <img src="{{URL::asset('/img/about.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-5 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right"
                        data-aos-delay="100">
                        <h3>Powerful Digital Solutions With ABC (Akrab, Bersejahtera, Ceria).</h3>
                        <p class="fst-italic mt-4">
                            PT ABC is a company engaged in the field of software development (software developer). The
                            company focuses on designing, developing, and providing software solutions for various
                            business and industrial needs.
                        </p>
                        <ul>
                            <li><i class="ri-check-double-line"></i> Recognition and Awards: PT ABC acknowledges the
                                contributions of its employees and provides recognition for outstanding job performance.
                            </li>
                            <li><i class="ri-check-double-line"></i>Technical Skill Development: Employees have the
                                opportunity to continually hone and enhance their technical skills in software
                                development.</li>
                            <li><i class="ri-check-double-line"></i> Work Flexibility: The company may offer flexibility
                                in terms of work hours and location, in accordance with existing policies.</li>
                        </ul>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->



        <!-- ======= Features Section ======= -->
        <section id="features" class="features mt-5">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="image col-lg-6" style="background-image: url('{{URL::asset('/img/features.jpg')}}')"
                        data-aos="fade-right"></div>
                    <div class="col-lg-5 ms-4" data-aos="fade-left" data-aos-delay="100">
                        <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
                            <i class="bx bx-current-location"></i>
                            <h4>Location Flexibility</h4>
                            <p>Many companies in this industry adopt remote work models, offering flexibility to work
                                from various locations.</p>
                        </div>
                        <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                            <i class="bx bx-shield"></i>
                            <h4>Sense of Fulfillment</h4>
                            <p>Protecting organizations from cyber attacks brings a sense of fulfillment and
                                meaningfulness as you help secure vital information and infrastructure from threats.</p>
                        </div>
                        <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                            <i class="bx bx-network-chart"></i>
                            <h4>Networking</h4>
                            <p>Working in the network security industry enables interactions with fellow technology
                                professionals, helping you build a wide network of contacts.</p>
                        </div>
                        <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                            <i class="bx bx-cross"></i>
                            <h4>High Demand</h4>
                            <p> The increasing complexity of cyber threats drives a high demand for network security
                                solutions. Organizations require strong protection to safeguard their data and systems
                                from evolving attacks.</p>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Features Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Services</h2>
                    <p>Check our Services</p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-shield-alt-2"></i></div>
                            <h4><a href="">Security Consultation</a></h4>
                            <p>Providing consultations to organizations regarding effective network security strategies
                                based on specific needs and risks.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4><a href="">Network Security Management</a></h4>
                            <p>Managing and monitoring network infrastructure to detect and address potential threats
                                while maintaining compliance with security policies.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-clipboard"></i></div>
                            <h4><a href="">Security Training and Education</a></h4>
                            <p>Offering training to internal teams on best practices for maintaining network security
                                and responding to attacks.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-world"></i></div>
                            <h4><a href="">Security Maintenance and Updates</a></h4>
                            <p>Conducting routine maintenance and updates to keep systems and applications secure and
                                protected.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-slideshow"></i></div>
                            <h4><a href="">Threat Analysis and Security Intelligence</a></h4>
                            <p>Identifying and analyzing emerging and evolving cyber threats, as well as providing
                                security intelligence information to clients.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-arch"></i></div>
                            <h4><a href="">Identity and Access Management</a></h4>
                            <p>Managing and controlling user access rights to systems and applications, implementing
                                strong authentication and authorization measures.</p>
                        </div>
                    </div>
                </div>
        </section><!-- End Hero -->

        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
            <div class="" data-aos="zoom-in">

                <div>
                    <h1><a href="index.html"><img src="{{asset('img/lugu.png')}}" alt=""><span></span></a></h1>
                </div>

            </div>
        </section>
        <!-- End Cta Section -->


        <section id="Berita" class="Berita">
            <div class="container mt-5" data-aos="fade-up">

                <div class="section-title">
                    <h2>News</h2>
                    <p>Latest News</p>
                </div>

                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"> <img src="{{URL::asset('/img/portfolio/portfolio-1.jpg')}}" alt="">
                            <div class="card-news">
                                <h1>Seorang anak Meninggal</h1>
                                <p>makan</p>
                            </div>
                        </div>
                        
                        
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                

                </div>


        </section><!-- End Berita Section -->

        <!-- ======= Product Section ======= -->
        <section id="portfolio" class="portfolio mt-5">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Product</h2>
                    <p>Check our Product</p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">App</li>
                            <li data-filter=".filter-card">Card</li>
                            <li data-filter=".filter-web">Web</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container mt-5" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{URL::asset('/img/portfolio/portfolio-1.jpg')}}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>App 1</h4>
                                <p>App</p>
                                <div class="portfolio-links">
                                    <a href="{{URL::asset('/img/portfolio/portfolio-1.jpg')}}"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="{{URL::asset('/img/portfolio/portfolio-1.jpg')}}" title="More Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-3 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="{{URL::asset('/img/portfolio/portfolio-2.jpg')}}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Web 3</h4>
                                <p>Web</p>
                                <div class="portfolio-links">
                                    <a href="{{URL::asset('/img/portfolio/portfolio-2.jpg')}}"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{URL::asset('/img/portfolio/portfolio-1.jpg')}}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>App 1</h4>
                                <p>App</p>
                                <div class="portfolio-links">
                                    <a href="{{URL::asset('/img/portfolio/portfolio-3.jpg')}}"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{URL::asset('/img/portfolio/portfolio-1.jpg')}}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>App 1</h4>
                                <p>App</p>
                                <div class="portfolio-links">
                                    <a href="{{URL::asset('/img/portfolio/portfolio-1.jpg')}}"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="{{URL::asset('/img/portfolio/portfolio-1.jpg')}}" title="More Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{URL::asset('/img/portfolio/portfolio-1.jpg')}}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>App 1</h4>
                                <p>App</p>
                                <div class="portfolio-links">
                                    <a href="{{URL::asset('/img/portfolio/portfolio-1.jpg')}}"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="{{URL::asset('/img/portfolio/portfolio-1.jpg')}}" title="More Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{URL::asset('/img/portfolio/portfolio-1.jpg')}}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>App 1</h4>
                                <p>App</p>
                                <div class="portfolio-links">
                                    <a href="{{URL::asset('/img/portfolio/portfolio-1.jpg')}}"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="{{URL::asset('/img/portfolio/portfolio-1.jpg')}}" title="More Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts mb-5">
            <div class="container" data-aos="fade-up">

                <div class="row no-gutters">
                    <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start"
                        data-aos="fade-right" data-aos-delay="100"></div>
                    <div class="col-xl-7 ps-4 ps-lg-5 pe-4 pe-lg-1 d-flex align-items-stretch" data-aos="fade-left"
                        data-aos-delay="100">
                        <div class="content d-flex flex-column justify-content-center">
                            <h3>Achievement</h3>
                            <p>
                                The achievements that have been obtained by this company <br>
                                "Soaring Towards Success: Achievements of PT ABC in the Network Security Industry"
                            </p>
                            <div class="row mt-4">
                                <div class="col-md-6 d-md-flex align-items-md-stretch">
                                    <div class="count-box">
                                        <i class="bi bi-emoji-smile"></i>
                                        <span data-purecounter-start="0" data-purecounter-end="65"
                                            data-purecounter-duration="2" class="purecounter"></span>
                                        <p><strong>Happy Clients</strong> <br> Doing projects for several clients</p>
                                    </div>
                                </div>
                                <div class="col-md-6 d-md-flex align-items-md-stretch">
                                    <div class="count-box">
                                        <i class="bi bi-journal-richtext"></i>
                                        <span data-purecounter-start="0" data-purecounter-end="85"
                                            data-purecounter-duration="2" class="purecounter"></span>
                                        <p><strong>Projects</strong>PT ABC has received quite a lot of projects from
                                            many clients</p>
                                    </div>
                                </div>

                                <div class="col-md-6 d-md-flex align-items-md-stretch">
                                    <div class="count-box">
                                        <i class="bi bi-clock"></i>
                                        <span data-purecounter-start="0" data-purecounter-end="35"
                                            data-purecounter-duration="2" class="purecounter"></span>
                                        <p><strong>Years of experience</strong> The experience that has been carried out
                                            by pt abc</p>
                                    </div>
                                </div>

                                <div class="col-md-6 d-md-flex align-items-md-stretch">
                                    <div class="count-box">
                                        <i class="bi bi-award"></i>
                                        <span data-purecounter-start="0" data-purecounter-end="30"
                                            data-purecounter-duration="2" class="purecounter"></span>
                                        <p><strong>Awards</strong> and many awards have been obtained by PT ABC</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End .content-->
                    </div>
                </div>
            </div>
        </section><!-- End Counts Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container" data-aos="zoom-in">

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{URL::asset('/img/counts-img.jpg')}}" class="testimonial-img img-fluid"
                                    alt="">
                                <h3>Kemet Hakim</h3>
                                <h4>Produk &amp; Marketing Rap</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Di dunia yang penuh dengan baris kode, setiap titik koma adalah sebuah harapan
                                    dan
                                    setiap kurung kurawal adalah sebuah impian.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{URL::asset('/img/counts-img.jpg')}}" class="testimonial-img img-fluid"
                                    alt="">
                                <h3>Kemet Hakim</h3>
                                <h4>Produk &amp; Marketing Rap</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Di dunia yang penuh dengan baris kode, setiap titik koma adalah sebuah harapan
                                    dan
                                    setiap kurung kurawal adalah sebuah impian.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{URL::asset('/img/counts-img.jpg')}}" class="testimonial-img img-fluid"
                                    alt="">
                                <h3>Kemet Hakim</h3>
                                <h4>Produk &amp; Marketing Rap</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    In a world full of lines of code, every semicolon is a wish
                                    And
                                    every curly brace is a dream.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{URL::asset('/img/counts-img.jpg')}}" class="testimonial-img img-fluid"
                                    alt="">
                                <h3>Faiq Al Harits</h3>
                                <h4>Programmer</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    When you solve a problem with code, you feel like a person
                                    the hero who conquered the world.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>

                </div>

            </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Team</h2>
                    <p>Check our Team</p>
                </div>

                <div class="row">

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img">
                                <img src="{{URL::asset('/img/team/team-1.jpg')}}" class="img-fluid" alt="">
                                <div class="social">

                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Walter White</h4>
                                <span>Chief Executive Officer</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="200">
                            <div class="member-img">
                                <img src="{{URL::asset('/img/team/team-2.jpg')}}" class="img-fluid" alt="">
                                <div class="social">

                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Sarah Jhonson</h4>
                                <span>Product Manager</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="300">
                            <div class="member-img">
                                <img src="{{URL::asset('/img/team/team-3.jpg')}}" class="img-fluid" alt="">
                                <div class="social">

                                </div>
                            </div>
                            <div class="member-info">
                                <h4>William Anderson</h4>
                                <span>CTO</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="400">
                            <div class="member-img">
                                <img src="{{URL::asset('/img/team/team-4.jpg')}}" class="img-fluid" alt="">
                                <div class="social">

                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Amanda Jepson</h4>
                                <span>Accountant</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Team Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact</h2>
                    <p>Contact Us</p>
                </div>

                <div>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3966.484881061526!2d106.71611497499012!3d-6.199580893788123!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNsKwMTEnNTguNSJTIDEwNsKwNDMnMDcuMyJF!5e0!3m2!1sen!2sid!4v1692615391550!5m2!1sen!2sid"
                        width="100%" height="270px" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <div class="row mt-5">

                    <div class="col-lg-4">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>Palem Ganda Asri 2, Cluster AA Blok E No. 28, Karang Mulya, Karang Tengah,
                                    Tangerang, Banten 15157</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>ptabcrate@gmail.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>+1 5589 55488 55s</p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0">

                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                    required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>

                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-info ">
                            <h1 class="logo me-auto me-lg-0 mb-3"><a href="index.html"><img
                                        src="{{asset('img/lugu.png')}}" alt=""
                                        style="width:25%; height:50px;"><span></span></a></h1>
                            <p>
                                Palem Ganda Asri 2, Cluster AA Blok E No. 28, Karang Mulya, Karang Tengah,
                                Tangerang, <br>
                                Banten 15157 indonesia<br><br>
                                <strong>Phone:</strong> +62 8223 2234 23<br>
                                <strong>Email:</strong> ptabcrate@gmail.com<br>
                            </p>
                            <div class="social-links mt-3">
                                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#services">Security Consultation</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#services">Network Security Management</a>
                            </li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#services">>Security Training and
                                    Education</a>
                            </li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#services">Security Maintenance and
                                    Updates</a>
                            </li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#services">Threat Analysis and Security
                                    Intelligence</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>ABC</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/ -->
                Designed by <a href="https://bootstrapmade.com/">LUKFAQ</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{asset('vendor/purecounter/purecounter_vanilla.js')}}"></script>
    <script src="{{asset('vendor/aos/aos.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{asset('vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('vendor/php-email-form/validate.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{asset('js/main.js')}}"></script>

    <!-- Typed JS -->
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>

    <script>
        var typed = new Typed(".auto-type", {
            strings: ['Programmer', 'Network Security', 'Application Security'],
            typeSpeed: 100,
            backSpeed: 100,
            loop: true
        })

    </script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });

    </script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>


    </main>
    <!-- End #main -->



</body>

</html>
