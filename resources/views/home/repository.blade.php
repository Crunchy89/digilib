@extends("welcome")

@section("title","repository")

@section("body")
<section class="service_section">
    <div class="container">
      <div class="custom_heading-container">
        <h2>
          Repository STMIK Lombok
        </h2>
      </div>
      <div class="service_container layout_padding2">
        @foreach ($repository as $data)
        <div class="service_box">
          <div class="img-box">
            <img src="{{asset($data->cover)}}" alt="cover"/>
          </div>
          <div class="detail-box">
            <h4>
              {{$data->judul}}
            </h4>
            <p>
              have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even
              slightly believable. If you are
            </p>
          </div>
        </div>
        @endforeach
      </div>
      <div>
        <a href="">
          Baca Selengkapnya
        </a>
      </div>
    </div>
  </section>
  @endsection
