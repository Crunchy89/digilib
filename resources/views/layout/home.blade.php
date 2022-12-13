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

  <body class="{{$subpage ? "sub_page" :""}}">
    <div class="hero_area">
      <!-- header section strats -->
      <header class="header_section">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-8">
              <nav class="navbar navbar-expand-lg custom_nav-container ">
                <a class="navbar-brand" href="{{route("home")}}">
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
                        <a class="nav-link" href="{{route("home")}}">Beranda <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{route("home.about")}}">Tentang</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{route("home.repository")}}">Repository </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{route("home.katalog")}}">Katalog</a>
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
    </div>


      @yield("body")

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
