@extends("layout.data")

@section("breadcrumb")
    <li class="breadcrumb-item"><a href="{{route("admin.dashboard")}}">Dashboard</a></li>
    <li class="breadcrumb-item active">{{ ucwords($title) }}</li>
@endsection

@section("form")
    <div class="form-group">
        <label for="role">Role</label>
        <input type="text" name="role" id="role" class="form-control">
    </div>
@endsection

@section("datatable")
table = $('#table').DataTable({
    processing: true,
    serverSide: true,
    ajax: `${url}`,
    columns: [
        {data: 'DT_RowIndex', name: 'DT_RowIndex',orderable: false, searchable: false},
        {data: 'role', name: 'role',orderable: true, searchable: true},
        {data: 'action', name: 'action',orderable: false, searchable: false},
    ]
});
@endsection

@section("edit-data")
$('#id').val(data.uuid);
$('#role').val(data.role);
@endsection
