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
      {{-- <div class="form-group">
        <div class="input-group mt-3 mb-3">
            <input type="text" class="form-control" placeholder="Cari" aria-label="Recipient's username" aria-describedby="basic-addon2">
            <div class="input-group-append">
              <button class="btn btn-success" id="basic-addon2">Cari</button>
            </div>
          </div>
      </div> --}}
      <div class="service_container layout_padding2" id="repo">
        {{-- @foreach ($repository as $data)

        @endforeach --}}
      </div>
      <div>
        <button id="tambah" class="btn btn-info">
          Lihat Lebih Banyak
        </button>
      </div>
    </div>
  </section>
  @endsection

  @section("script")
    <script>
        $(document).ready(function(){
            var html='';
            var page = 1;
            getRepo()
            async function getRepo(){
                await axios.get(`{{route('home.repository.getrepo')}}?page=${page}`)
                .then(res=>{
                    res.data.data.map((a,i)=>{
                        html +=`
                        <div class="service_box">
                          <div class="img-box">
                            <img src="${a.cover}" alt="cover"/>
                          </div>
                          <div class="detail-box">
                            <h4>
                              ${a.judul}
                            </h4>
                            <p>
                                ${a.abstrak.substr(0,150)}...
                                </p>
                          </div>
                            <div>
                                <a href="${a.url}" >Baca Selengkapnya</a>
                            </div>

                        </div>
                        `
                    })
                    $("#repo").html(html)
                    if (res.data.data.length != 0)page++;
                })
                .catch(err=>{
                    console.log(err)
                })
            }
            $("#tambah").click(function(){
                    getRepo()
            })
        })
    </script>
  @endsection
