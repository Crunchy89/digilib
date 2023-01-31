@extends("layout.data")

@section("breadcrumb")
    <li class="breadcrumb-item"><a href="{{route("admin.dashboard")}}">Dashboard</a></li>
    <li class="breadcrumb-item active">{{ ucwords($title) }}</li>
@endsection

@section("form")
    <div class="form-group">
        <label for="kode">Kode</label>
        <input type="text" name="kode" id="kode" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" class="form-control" required>
    </div>
@endsection

@section("datatable")
table = $('#table').DataTable({
    processing: true,
    serverSide: true,
    ajax: `${url}`,
    columns: [
        {data: 'DT_RowIndex', name: 'DT_RowIndex',orderable: false, searchable: false},
        {data: 'kode', name: 'kode',orderable: true, searchable: true},
        {data: 'nama', name: 'nama',orderable: true, searchable: true},
        {data: 'action', name: 'action',orderable: false, searchable: false},
    ]
});
@endsection

@section("edit-data")
$('#id').val(data.id);
$('#kode').val(data.kode);
$('#nama').val(data.nama);
@endsection
