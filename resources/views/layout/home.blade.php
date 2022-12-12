<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <!-- Site Metas -->
    @yield("meta")


    <title>@yield("title")</title>

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css"/>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{asset("assets/css/bootstrap.css")}}"/>

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,700&amp;display=swap" rel="stylesheet"/>
    <!-- Custom styles for this template -->
    <link href="{{asset("assets")}}/css/style.css" rel="stylesheet"/>
    <!-- responsive style -->
    <link href="{{asset("assets")}}/css/responsive.css" rel="stylesheet"/>
  </head>

  <body>
    <div class="hero_area">
      <!-- header section strats -->
      <header class="header_section">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-8">
              <nav class="navbar navbar-expand-lg custom_nav-container ">
                <a class="navbar-brand" href="index.html">
                  <span>
                    Digilib
                  </span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <div class="d-flex  flex-column flex-lg-row align-items-center">
                    <ul class="navbar-nav  ">
                      <li class="nav-item active">
                        <a class="nav-link" href="index.html">Beranda <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="about.html">Tentang</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="service.html">Repository </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="contact.html">Katalog</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"> Masuk</a>
                      </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                      <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
                    </form>
                  </div>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </header>
      <!-- end header section -->
      <!-- slider section -->
      <section class=" slider_section ">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">01</li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1">02</li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2">03</li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="container">
                <div class="row">
                  <div class="col-lg-5 col-md-6">
                    <div class="slider_detail-box">
                      <h1>
                        Selamat datang <br/>
                        Digilib <br/>
                        STMIK Lombok
                      </h1>
                      <p>
                        Gali dan tingkatkan pengetahuanmu bersama kami
                      </p>
                      <div class="btn-box">
                        <a href="" class="btn-1">
                          Baca Selengkapnya
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="slider_img-box">
                      <img src="{{asset("assets/images/slider-img.png")}}" alt=""/>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6">
                        <div class="slider_detail-box">
                          <h1>
                            Selamat datang <br/>
                            Digilib <br/>
                            STMIK Lombok
                          </h1>
                          <p>
                            Gali dan tingkatkan pengetahuanmu bersama kami
                          </p>
                          <div class="btn-box">
                            <a href="" class="btn-1">
                              Baca Selengkapnya
                            </a>
                          </div>
                        </div>
                      </div>
                  <div class="col-md-6">
                    <div class="slider_img-box">
                      <img src="{{asset("assets/images/slider-img.png")}}" alt=""/>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6">
                        <div class="slider_detail-box">
                          <h1>
                            Selamat datang <br/>
                            Digilib <br/>
                            STMIK Lombok
                          </h1>
                          <p>
                            Gali dan tingkatkan pengetahuanmu bersama kami
                          </p>
                          <div class="btn-box">
                            <a href="" class="btn-1">
                              Baca Selengkapnya
                            </a>
                          </div>
                        </div>
                      </div>
                  <div class="col-md-6">
                    <div class="slider_img-box">
                      <img src="{{asset("assets/images/slider-img.png")}}" alt=""/>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel_btn-container">
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="sr-only">Sebelumnya</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="sr-only">Selanjutnya</span>
            </a>
          </div>
        </div>
      </section>
      <!-- end slider section -->
    </div>

    <!-- welcome section -->
    <section class="welcome_section layout_padding">
      <div class="container">
        <div class="custom_heading-container">
          <h2>
            Selamat datang di Perpustakaan online kami
          </h2>
        </div>
        <div class="layout_padding2">
          <div class="img-box">
            <img src="{{asset("assets/images/welcome.png")}}" alt=""/>
          </div>
          <div class="detail-box">
            <p>
              dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
              aliqua.
              Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              Duis
              aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
            </p>
            <div>
              <a href="">
                Baca Selengkapnya
              </a>
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- end welcome section -->

    <!-- service section -->

    <section class="service_section">
      <div class="container">
        <div class="custom_heading-container">
          <h2>
            Mau cari apa ?
          </h2>
        </div>
        <div class="service_container layout_padding2">
          <div class="service_box">
            <div class="img-box">
              <img src="{{asset("assets/images/s-1.jpg")}}" alt=""/>
            </div>
            <div class="detail-box">
              <h4>
                E-Book
              </h4>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit harum, minima laudantium cumque quos delectus quas dolor error quidem exercitationem. Corrupti suscipit officiis doloremque neque, eaque quidem dicta odit optio.
              </p>
            </div>
          </div>
          <div class="service_box">
            <div class="img-box">
              <img src="{{asset("assets")}}/images/s-2.jpg" alt=""/>
            </div>
            <div class="detail-box">
              <h4>
                Jurnal
              </h4>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab suscipit, ut nulla nesciunt et officiis accusantium possimus doloremque aliquid dolorem temporibus voluptatum? Libero labore at distinctio non dolore blanditiis adipisci.
              </p>
            </div>
          </div>
          <div class="service_box">
            <div class="img-box">
              <img src="{{asset("assets/images/s-3.jpg")}}" alt=""/>
            </div>
            <div class="detail-box">
              <h4>
                Karya Ilmiah
              </h4>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate perferendis tempore doloremque quaerat aliquam. Vitae vel assumenda atque repellendus minima repellat qui molestiae tenetur iste, hic consequatur sapiente non optio.
              </p>
            </div>
          </div>
        </div>
        <div>
          <a href="">
            Baca Selengkapnya
          </a>
        </div>
      </div>
    </section>

    <!-- end service section -->
    <!--problem section -->
    <section class="problem_section layout_padding">
      <div class="container">
        <div class="custom_heading-container">
          <h2>
            Punya masalah dalam menuntut ilmu ?
          </h2>
        </div>
        <div class="layout_padding2">
          <div class="img-box">
            <img src="{{asset("assets/images/problem.jpg")}}" alt=""/>
          </div>
          <div class="detail-box">
            <p>
             Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam quo perferendis quia perspiciatis aut quos molestiae repellat beatae sapiente soluta inventore porro officiis rem nam hic alias similique, iure optio.
            </p>
            <div>
              <a href="">
                Baca Selengkapnya
              </a>
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- end problem section -->
    <!-- why section -->

    <section class="why_section layout_padding">
      <div class="container">
        <div class="custom_heading-container">
          <h2>
            Digilib
          </h2>
        </div>
        <div class="content-container">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua. Ut enim ad minim veniam, quis
          </p>
          <div class="row">
            <div class="col-md-3 col-sm-6">
              <div class="img-box">
                <img src="{{asset("assets/images/smiley.png")}}" alt=""/>
              </div>
              <div class="detail-box">
                <h3>
                  1000
                </h3>
                <h6>
                  Alumni
                </h6>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="img-box">
                <img src="{{asset("assets/images/monitor.png")}}" alt=""/>
              </div>
              <div class="detail-box">
                <h3>
                  2
                </h3>
                <h6>
                  Laboratorium
                </h6>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="img-box">
                <img src="{{asset("assets/images/multiple-users-silhouette.png")}}" alt=""/>
              </div>
              <div class="detail-box">
                <h3>
                  4500+
                </h3>
                <h6>
                  Mahasiswa
                </h6>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="img-box">
                <img src="{{asset("assets/images/bar-chart.png")}}" alt=""/>
              </div>
              <div class="detail-box">
                <h3>
                  Rp. 1.000.000,00
                </h3>
                <h6>
                  Biaya Kuliah Termurah
                </h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- end why section -->

    <!-- client section -->
    <section class="client_section layout_padding">
      <div class="container">
        <h2>
          Prakata
        </h2>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="client_container layout_padding2">
                <div class="client_text">
                  <p>
                    psum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                    commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                  </p>
                </div>
                <div class="detail-box">
                  <div class="img-box">
                    <img src="{{asset("assets/images/client.png")}}" alt=""/>
                  </div>
                  <div class="name">
                    <h5>
                      Joans Mark
                    </h5>
                    <p>
                      cal
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="client_container layout_padding2">
                <div class="client_text">
                  <p>
                    psum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                    commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                  </p>
                </div>
                <div class="detail-box">
                  <div class="img-box">
                    <img src="{{asset("assets/images/client.png")}}" alt=""/>
                  </div>
                  <div class="name">
                    <h5>
                      Joans Mark
                    </h5>
                    <p>
                      cal
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="client_container layout_padding2">
                <div class="client_text">
                  <p>
                    psum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                    commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                  </p>
                </div>
                <div class="detail-box">
                  <div class="img-box">
                    <img src="{{asset("assets")}}/images/client.png" alt=""/>
                  </div>
                  <div class="name">
                    <h5>
                      Joans Mark
                    </h5>
                    <p>
                      cal
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="sr-only">Sebelumnya</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="sr-only">Selanjutnya</span>
          </a>
        </div>

      </div>
    </section>
    <!-- end client section -->
    <!-- contact section -->
    <section class="contact_section layout_padding">
      <div class="container contact_heading">
        <h2>
          Hubungi Kami
        </h2>
        <p>
          psum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
        </p>
      </div>
      <div class="container">
        <form>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputName4">Nama</label>
              <input type="text" class="form-control" id="inputName4"/>
            </div>
            <div class="form-group col-md-6">
              <label for="inputEmail4">Email</label>
              <input type="email" class="form-control" id="inputEmail4"/>
            </div>

          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputNumber4">Nomor Telepon</label>
              <input type="tel" class="form-control" id="inputNumber4"/>
            </div>

          </div>
          <div class="form-group">
            <label for="inputMessage">Pesan</label>
            <input type="text" class="form-control" id="inputMessage" placeholder=""/>
          </div>
      </div>

      <div class="d-flex justify-content-center">
        <button type="submit" class="">Kirim</button>
      </div>
      </form>

    </section>


    <!-- end contact section -->
    <div class="footer_bg">
      <!-- info section -->
      <section class="info_section layout_padding2-bottom">
        <div class="container">
          <h3 class="">
            Digilib
          </h3>
        </div>
        <div class="container info_content">

          <div>
            <div class="row">
              <div class="col-md-6 col-lg-4">
                <div class="d-flex">
                  <h5>
                    Link
                  </h5>
                </div>
                <div class="d-flex ">
                  <ul>
                    <li>
                      <a href="">
                        Tentang Kami
                      </a>
                    </li>
                    <li>
                      <a href="">
                        Jurusan
                      </a>
                    </li>
                    <li>
                      <a href="">
                        Laboratorium
                      </a>
                    </li>
                    <li>
                      <a href="">
                        Alumni
                      </a>
                    </li>
                    <li>
                      <a href="">
                        Hubungi Kami
                      </a>
                    </li>
                  </ul>
                  <ul class="ml-3 ml-md-5">
                    <li>
                      <a href="">
                        Loram ipusm
                      </a>
                    </li>
                    <li>
                      <a href="">
                        Loram ipusm
                      </a>
                    </li>
                    <li>
                      <a href="">
                        Loram ipusm
                      </a>
                    </li>
                    <li>
                      <a href="">
                        Loram ipusm
                      </a>
                    </li>
                    <li>
                      <a href="">
                        Loram ipusm
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="d-flex">
                  <h5>
                    The Services
                  </h5>
                </div>
                <div class="d-flex ">
                  <ul>
                    <li>
                      <a href="">
                        About Us
                      </a>
                    </li>
                    <li>
                      <a href="">
                        About services
                      </a>
                    </li>
                    <li>
                      <a href="">
                        About Departments
                      </a>
                    </li>
                    <li>
                      <a href="">
                        Services
                      </a>
                    </li>
                    <li>
                      <a href="">
                        Contact Us
                      </a>
                    </li>
                  </ul>
                  <ul class="ml-3 ml-md-5">
                    <li>
                      <a href="">
                        Lorem ipsum dolor
                      </a>
                    </li>
                    <li>
                      <a href="">
                        sit amet, consectetur
                      </a>
                    </li>
                    <li>
                      <a href="">
                        adipiscing elit,
                      </a>
                    </li>
                    <li>
                      <a href="">
                        sed do eiusmod
                      </a>
                    </li>
                    <li>
                      <a href="">
                        tempor incididunt
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="d-flex">
                  <h5>
                    Contact Us
                  </h5>
                </div>
                <div class="d-flex ">
                  <ul>
                    <li>
                      <a href="">
                        About Us
                      </a>
                    </li>
                    <li>
                      <a href="">
                        About services
                      </a>
                    </li>
                    <li>
                      <a href="">
                        About Departments
                      </a>
                    </li>
                    <li>
                      <a href="">
                        Services
                      </a>
                    </li>
                    <li>
                      <a href="">
                        Contact Us
                      </a>
                    </li>
                  </ul>
                  <ul class="ml-3 ml-md-5">
                    <li>
                      <a href="">
                        Lorem ipsum
                      </a>
                    </li>
                    <li>
                      <a href="">
                        dolor sit amet,
                      </a>
                    </li>
                    <li>
                      <a href="">
                        consectetur
                      </a>
                    </li>
                    <li>
                      <a href="">
                        adipiscing
                      </a>
                    </li>
                    <li>
                      <a href="">
                        elit, sed do eiusmod
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="d-flex flex-column flex-lg-row justify-content-between align-items-center align-items-lg-baseline">
            <div class="social-box">
              <a href="">
                <img src="{{asset("assets")}}/images/fb.png" alt=""/>
              </a>

              <a href="">
                <img src="{{asset("assets")}}/images/twitter.png" alt=""/>
              </a>
              <a href="">
                <img src="{{asset("assets")}}/images/linkedin1.png" alt=""/>
              </a>
              <a href="">
                <img src="{{asset("assets")}}/images/instagram1.png" alt=""/>
              </a>
            </div>
            <div class="form_container mt-5">
              <form action="">
                <label for="subscribeMail">
                  Newsletter
                </label>
                <input type="email" placeholder="Enter Your email" id="subscribeMail"/>
                <button type="submit">
                  Subscribe
                </button>
              </form>
            </div>
          </div>
        </div>

      </section>

      <!-- end info_section -->

      <!-- footer section -->
      <section class="container-fluid footer_section">
        <p>
          © 2019 All Rights Reserved By
          <a href="https://html.design/">Free Html Templates</a>
        </p>
      </section>
      <!-- footer section -->
    </div>


    <script type="text/javascript" src="{{asset("assets/js/jquery-3.4.1.min.js")}}"></script>
    <script type="text/javascript" src="{{asset("assets/js/bootstrap.js")}}"></script>



  </body></html>
