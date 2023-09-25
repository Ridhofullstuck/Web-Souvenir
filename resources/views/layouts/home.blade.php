@extends('index')

@section('main')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero">

        <div class="container position-relative">
            <div class="row gy-5" data-aos="fade-in">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
                    <h2>Selamat Datang Di Toko <span>WeddSouvenir</span></h2>
                    <p>WeddSouvenir menyediakan Souvenir untuk pernikahan dan wedding berupa Kipas, Parfume, Mug , Gantungan
                        kunci, dll.
                        Dengan desain yang unik
                        dan harga terjangkau untuk acara wedding.</p>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="/produk" class="btn-get-started">Lanjut Ke Produk</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <img src="img/home-img.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
                </div>
            </div>
        </div>

    </section>

    <!-- ======= Servis Section ======= -->
    <section id="services" class="services sections-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Kenapa Memilih Kami?</h2>
            </div>

            <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">

                <div class="col-lg-4 col-md-6">
                    <div class="service-item  position-relative">
                        <div class="icon">
                            <i class="bi bi-activity"></i>
                        </div>
                        <h3>Souvenir Berkualitas</h3>
                        <p>Kami sangat selektif dalam memilih produk-produk kami. Setiap souvenir yang kami tawarkan telah
                            melalui uji kualitas ketat untuk memastikan bahwa mereka tidak hanya indah secara estetika</p>
                        <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-broadcast"></i>
                        </div>
                        <h3>Pilihan yang luas</h3>
                        <p>Apapun tema pernikahan Anda, kami memiliki souvenir yang sesuai. Dari gaya klasik hingga tema
                            yang lebih kontemporer, kami memiliki berbagai macam pilihan</p>
                        <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-easel"></i>
                        </div>
                        <h3>Harga yang kompetitif</h3>
                        <p>Oleh karena itu, kami berkomitmen untuk menyediakan souvenir pernikahan berkualitas tinggi dengan
                            harga yang bersaing. Kami terus mencari cara untuk memberikan nilai terbaik kepada pelanggan
                            kami tanpa mengorbankan kualitas.</p>
                        <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-bounding-box-circles"></i>
                        </div>
                        <h3>Pelayanan yang ramah</h3>
                        <p> Kami menganggap setiap pelanggan sebagai bagian dari keluarga kami. Tim kami siap untuk menjawab
                            pertanyaan Anda, memberikan saran, atau membantu Anda dalam setiap langkah dari proses
                            pembelian. </p>
                        <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-calendar4-week"></i>
                        </div>
                        <h3>Pengiriman cepat</h3>
                        <p> kami bekerja keras untuk memastikan bahwa setiap souvenir tiba tepat waktu sesuai dengan jadwal
                            yang Anda tetapkan. Anda dapat mengandalkan kami untuk mengelola semua detail logistik sehingga
                            Anda dapat fokus pada momen spesial Anda.</p>
                        <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-chat-square-text"></i>
                        </div>
                        <h3>Pengalaman yang Solid</h3>
                        <p>Dengan pengalaman bertahun-tahun dalam industri souvenir pernikahan, kami telah membangun
                            reputasi yang solid sebagai penyedia terpercaya.</p>
                        <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div><!-- End Service Item -->

            </div>

        </div>
    </section><!-- End Our Services Section -->

    <!-- ======= Produk Section ======= -->
    <section id="portfolio" class="portfolio sections-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Produk Yang Kami Tawarkan</h2>
            </div>

            <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4 portfolio-container">

                    <div class="col-xl-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <a href="img/portfolio/sov1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img
                                    src="img/portfolio/sov1.jpg" class="img-fluid" alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="/" title="More Details">Souvenir 1</a></h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                            </div>
                        </div>
                    </div><!-- End Produk Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-product">
                        <div class="portfolio-wrap">
                            <a href="img/portfolio/sov2.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img
                                    src="img/portfolio/sov2.jpg" class="img-fluid" alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="/" title="More Details">Souvenir 2</a></h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                            </div>
                        </div>
                    </div><!-- End Produk Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
                        <div class="portfolio-wrap">
                            <a href="img/portfolio/sov3.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img
                                    src="img/portfolio/sov3.jpg" class="img-fluid" alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="/" title="More Details">Souvenir 3</a></h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                            </div>
                        </div>
                    </div><!-- End Produk Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-books">
                        <div class="portfolio-wrap">
                            <a href="img/portfolio/sov4.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img
                                    src="img/portfolio/sov4.jpg" class="img-fluid" alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="/" title="More Details">Souvenir 4</a></h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                            </div>
                        </div>
                    </div><!-- End Produk Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <a href="img/portfolio/sov5.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img
                                    src="img/portfolio/sov5.jpg" class="img-fluid" alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="/" title="More Details">Souvenir 5</a></h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                            </div>
                        </div>
                    </div><!-- End Produk Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-product">
                        <div class="portfolio-wrap">
                            <a href="img/portfolio/sov6.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img
                                    src="img/portfolio/sov6.jpg" class="img-fluid" alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="/" title="More Details">Souvenir 6</a></h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                            </div>
                        </div>
                    </div><!-- End Produk Item -->


                </div><!-- End Produk Container -->

            </div>
            <div class="d-flex justify-content-center justify-content-lg-center">
                <a href="/produk" class="btn-get-started">Lihat Produk Lainnya</a>
            </div>
        </div>

    </section><!-- End Produk Section -->
    
@endsection
