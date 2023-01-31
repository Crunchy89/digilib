@extends("layout.data")

@section("breadcrumb")
    <li class="breadcrumb-item"><a href="{{route("admin.dashboard")}}">Dashboard</a></li>
    <li class="breadcrumb-item active">{{ ucwords($title) }}</li>
@endsection

@section("form")
    <div class="form-group">
        <label for="nama_penerbit">Nama Penerbit</label>
        <input type="text" name="nama_penerbit" id="nama_penerbit" class="form-control" required>
    </div>
@endsection

@section("datatable")
table = $('#table').DataTable({
    processing: true,
    serverSide: true,
    ajax: `${url}`,
    columns: [
        {data: 'DT_RowIndex', name: 'DT_RowIndex',orderable: false, searchable: false},
        {data: 'nama_penerbit', name: 'nama_penerbit',orderable: true, searchable: true},
        {data: 'action', name: 'action',orderable: false, searchable: false},
    ]
});
@endsection

@section("edit-data")
$('#id').val(data.id);
$('#nama_penerbit').val(data.nama_penerbit);
@endsection
