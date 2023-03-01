@extends("welcome")

@section("title","repository")

@section("meta")
<meta name="keywords" content="{{ $repository->judul }}"/>
<meta name="description" content="{{ substr($repository->abstrak,0,150) }}"/>
<meta name="author" content="{{ $repository->nim }}"/>
<meta property="og:url" content="{{route("home.repository.detail",$repository->slug)}}" />
<meta property="og:title" content="{{$repository->judul}}" />
<meta property="og:description" content="{{ substr($repository->abstrak,0,150) }}" />
<meta property="og:image" content="{{asset($repository->cover)}}">
@endsection

@section("body")
<section class="service_section">
    <div class="container">
      <div class="custom_heading-container">
        <h2>
          {{$repository->judul}}
        </h2>
      </div>
      <div class="service_container layout_padding2">
        <h4>Abstrak</h4>
        <p>{{$repository->abstrak}}</p>
      </div>
    </div>
  </section>
  @endsection

  @section("script")
    <script>
        $(document).ready(function(){

        })
    </script>
  @endsection
