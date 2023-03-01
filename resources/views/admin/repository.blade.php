@extends("layout.data")

@section("breadcrumb")
    <li class="breadcrumb-item"><a href="{{route("admin.dashboard")}}">Dashboard</a></li>
    <li class="breadcrumb-item active">{{ ucwords($title) }}</li>
@endsection

@section("form")
    <div class="form-group">
        <label for="nim">NIM</label>
        <input type="text" name="nim" id="nim" class="form-control">
    </div>
    <div class="form-group">
        <label for="judul">Judul</label>
        <input type="text" name="judul" id="judul" class="form-control">
    </div>
    <div class="form-group">
        <label for="abstrak">Abstrak</label>
        <textarea class="form-control" name="abstrak" id="abstrak" rows="3"></textarea>
    </div>
    <div class="form-group">
        <label for="cover">Cover Skripsi</label>
        <input type="file" name="cover" id="cover" class="form-control" accept="image/*">
    </div>
    <div class="form-group">
        <label for="file">File Skripsi</label>
        <input type="file" name="file" id="file" class="form-control" accept="application/pdf">
    </div>
    <div class="form-group">
        <label for="file_demo">File Demo</label>
        <input type="file" name="file_demo" id="file_demo" class="form-control" accept="application/pdf">
    </div>
@endsection

@section("datatable")
table = $('#table').DataTable({
    processing: true,
    serverSide: true,
    ajax: `${url}`,
    columns: [
        {data: 'DT_RowIndex', name: 'DT_RowIndex',orderable: false, searchable: false},
        {data: 'nim', name: 'nim',orderable: true, searchable: true},
        {data: 'judul', name: 'judul',orderable: true, searchable: true},
        {data: 'abstrak', name: 'abstrak',orderable: true, searchable: true},
        {data: 'cover', name: 'cover',orderable: false, searchable: false},
        {data: 'file', name: 'file',orderable: false, searchable: false},
        {data: 'file_demo', name: 'file_demo',orderable: false, searchable: false},
        {data: 'action', name: 'action',orderable: false, searchable: false},
    ]
});
@endsection

@section("edit-data")
$('#id').val(data.uuid);
$('#nim').attr("disabled",true);
$('#nim').val(data.nim);
$('#judul').val(data.judul);
$('#abstrak').html(data.abstrak);
@endsection
