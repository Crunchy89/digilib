@extends("layout.data")

@section("breadcrumb")
    <li class="breadcrumb-item"><a href="{{route("admin.dashboard")}}">Dashboard</a></li>
    <li class="breadcrumb-item active">{{ ucwords($title) }}</li>
@endsection

@section("form")
<div class="form-group">
    <label for="username">Username</label>
    <input type="text" name="username" id="username" class="form-control">
</div>
<div class="form-group">
    <label for="password">Password</label>
    <input type="password" name="password" id="password" class="form-control">
</div>
    <div class="form-group">
        <label for="role_uuid">Role</label>
        <select name="role_uuid" id="role_uuid" class="form-control">
            <option value="">Pilih Role</option>
            @foreach ($role as $data)
                <option value="{{$data->uuid}}">{{$data->role}}</option>
            @endforeach
        </select>
    </div>
@endsection

@section("datatable")
table = $('#table').DataTable({
    processing: true,
    serverSide: true,
    ajax: `${url}`,
    columns: [
        {data: 'DT_RowIndex', name: 'DT_RowIndex',orderable: false, searchable: false},
        {data: 'username', name: 'username',orderable: true, searchable: true},
        {data: 'role', name: 'role',orderable: true, searchable: true},
        {data: 'action', name: 'action',orderable: false, searchable: false},
    ]
});
@endsection

@section("edit-data")
$('#id').val(data.uuid);
$('#username').attr("disabled",true);
$('#username').val(data.username);
$('#role_uuid').val(data.role_uuid);
@endsection
