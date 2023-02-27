@extends("layout.admin")

@section("title",$title)

@section("content-header")
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">{{ ucwords($title) }}</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            @yield("breadcrumb")
          </ol>
        </div>
      </div>
    </div>
  </div>
@endsection

@section("content")
<div class="card">
    <div class="card-header">
    <h3 class="card-title">{{ ucwords($title) }}</h3>
    </div>
    <div class="card-body">
        <button id="tambah" class="btn btn-success btn-sm"><i class="fas fa-plus"></i> Tambah</button>
        <br>
        <br>

        <table id="table" class="table table-striped mt-5 w-100" data-url="{{ $url ?? null }}">
            <thead class="thead-dark">
                <tr>
                    @foreach ($th as $head)
                        <th>{{$head}}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody id="data">

            </tbody>
        </table>
    </div>
</div>

<div id="modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form id="form" data-url="{{$aksi}}">
            <div class="modal-body">
                <input type="hidden" name="id" id="id">
                <input type="hidden" name="aksi" id="aksi">
                @yield("form")
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button id="btn" type="submit" class="btn btn-primary">Tambah</button>
            </div>
        </form>
      </div>
    </div>
  </div>


@endsection

@section("script")
<script>
    const url = $("#table").data("url");
    let table;
    $(document).ready(function(){
        @yield("datatable")
        const form=$('.modal-body').html();
        $('#tambah').click(function(){
          $('.modal-body').html(form);
          $('#modal').find('h5').html('Tambah Data')
          $('#modal').find('#aksi').val('tambah')
          $('#modal').find('#btn').html('Tambah')
          $('#modal').modal('show');
        })
        $('#data').on('click','.edit',async function(){
            const data = await getData($(this).data("url"))
                $('.modal-body').html(form);
                $('#modal').find('h5').html('Edit Data')
                @yield("edit-data")
                $('#modal').find('#aksi').val('edit')
                $('#modal').find('#btn').html('Edit')
                $('#modal').modal('show');
        })
        $('#data').on('click','.hapus',function(){
          $('.modal-body').html(`
          <input type="hidden" name="aksi" id="aksi" value="hapus">
          <input type="hidden" id="id" name="id">
          <h3>Apakah Anda Yakin ?</h3>
          `);
          $('#modal').find('h5').html('Hapus Data')
          $('#id').val($(this).data('id'));
          $('#modal').find('#aksi').val('hapus')
          $('#modal').find('#btn').html('Hapus')
          $('#modal').modal('show');
        })
        $("#form").submit(async function (e) {
            e.preventDefault();
            const urlAksi = $(this).data("url");
            const dataSend = new FormData(this);
            const response = await postData(urlAksi,dataSend);
            table.ajax.reload();
            $("#modal").modal("hide");
            toastr["success"](response.toString());
  });
    })
</script>
@endsection
