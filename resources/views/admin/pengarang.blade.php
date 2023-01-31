@extends("layout.data")

@section("breadcrumb")
    <li class="breadcrumb-item"><a href="{{route("admin.dashboard")}}">Dashboard</a></li>
    <li class="breadcrumb-item active">{{ ucwords($title) }}</li>
@endsection

@section("form")
    <div class="form-group">
        <label for="nama_pengarang">Nama Pengarang</label>
        <input type="text" name="nama_pengarang" id="nama_pengarang" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="tahun_lahir">Nama Pengarang</label>
        <input type="date" name="tahun_lahir" id="tahun_lahir" class="form-control" required>
    </div>
@endsection

@section("datatable")
table = $('#table').DataTable({
    processing: true,
    serverSide: true,
    ajax: `${url}`,
    columns: [
        {data: 'DT_RowIndex', name: 'DT_RowIndex',orderable: false, searchable: false},
        {data: 'nama_pengarang', name: 'nama_pengarang',orderable: true, searchable: true},
        {data: 'tahun_lahir', name: 'tahun_lahir',orderable: true, searchable: false},
        {data: 'action', name: 'action',orderable: false, searchable: false},
    ]
});
@endsection

@section("edit-data")
$('#id').val(data.id);
$('#nama_pengarang').val(data.nama_pengarang);
$('#tahun_lahir').val(data.tahun_lahir);
@endsection
