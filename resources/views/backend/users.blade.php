@extends('layouts.BackendLayouts')
@section('backendContent')
<div class="col-lg-8 m-auto">
    <div class="card">
        <div class="card-header">
            <h3 class="fs-lg fw-medium" >All Users</h3>
        </div>
        <div class="card-body p-0">
            <table class="table">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
                @foreach ($users as $key=>$user)
                   <tr>
                    <td>{{ ++$key }}</td>
                    <td>{{ $user->name }}</td>
                    <td><a href="{{ route('ban.users', $user->id) }}">Ban User</a></td>
                    </tr> 
                @endforeach
            </table>
            <span>
               
            </span>
        </div>
    </div>
</div>
@endsection