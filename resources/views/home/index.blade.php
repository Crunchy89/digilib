@extends("welcome")

@section("slider")
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
@endsection
@section("body")
    <!-- slider section -->

      <!-- end slider section -->


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
@endsection
