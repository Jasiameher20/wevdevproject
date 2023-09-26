@extends('layouts.BackendLayouts')
@section('backendContent')
<div class="col-lg-8 m-auto">
    <div class="card">
        <div class="card-header">
            <h3 class="fs-lg fw-medium" >All Employer</h3>
        </div>
        <div class="card-body p-0">
            <table class="table">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
                @foreach ($employers as $key=>$user)
                    <tr>
                    <td>{{ ++$key }}</td>
                    <td>{{ $user->name }}</td>
                    <td>  
                    <a href="{{  $user->is_ban ? route('active.users',$user->id) : route('ban.users',$user->id) }}" class="btn btn-sm  btn-{{ $user->is_ban ? 'danger' : 'success' }}">
                        {{ $user->is_ban ? 'ban' : 'active' }}
                    </a>
                    </td>
                    </tr> 
                @endforeach
            </table>
            <span>
               
            </span>
        </div>
    </div>
</div>
@endsection