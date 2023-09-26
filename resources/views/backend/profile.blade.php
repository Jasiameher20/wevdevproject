
@extends('layouts.BackendLayouts')
@section('backendContent')


<div class="row">
<div class="card col-lg-8">
@role('admin')
<div class="card-body">
    <h2 class="fs-xl">This is Admin Profile Page.</h2>
   <form action="{{ route('profile.user') }}" method="POST" enctype="multipart/form-data">
   @csrf 
   @method('PUT')
   <div class="form-group my-4">
        <input type="text" name="userName" value="{{ auth()->user()->name }}" class="form-control" placeholder="User name">
    @error('userName')
        <span style="color:red;">{{ $message }}</span>
    @enderror
    </div>
    <div class="form-group my-4">
        <input type="text" name="email" value="{{ auth()->user()->email }}" class="form-control" placeholder="User Email">
        @error('email')
        <span style="color:red;">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group my-4">
        <input type="text" name="phone"  class="form-control" placeholder="User Phone Number" value="{{ auth()->user()->phone }}">
        @error('phone')
        <span style="color:red;">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group my-4">
        <label>User Profile Pic</label>
        <input name="profile_img" type="file" class="form-control">
        @error('profile_img')
        <span style="color:red;">{{ $message }}</span>
        @enderror
    </div>
    <button class="btn btn-primary mt-4">Update Profile</button>
   </form>
</div>
@endrole
@role('employer')
<div class="card-body">
    <h2 class="fs-xl">This is Employer Profile Page.</h2>
    <form action="{{ route('profile.user') }}" method="POST" enctype="multipart/form-data">
    @csrf 
    @method('PUT')
    <div class="form-group my-4">
         <input type="text" name="userName" value="{{ auth()->user()->name }}" class="form-control" placeholder="User name">
     @error('userName')
         <span style="color:red;">{{ $message }}</span>
     @enderror
     </div>
     <div class="form-group my-4">
         <input type="text" name="email" value="{{ auth()->user()->email }}" class="form-control" placeholder="User Email">
         @error('email')
         <span style="color:red;">{{ $message }}</span>
         @enderror
     </div>
     <div class="form-group my-4">
         <input type="text" name="phone"  class="form-control" placeholder="User Phone Number" value="{{ auth()->user()->phone }}">
         @error('phone')
         <span style="color:red;">{{ $message }}</span>
         @enderror
     </div>
     <div class="form-group my-4">
         <label>User Profile Pic</label>
         <input name="profile_img" type="file" class="form-control">
         @error('profile_img')
         <span style="color:red;">{{ $message }}</span>
         @enderror
     </div>
     <button class="btn btn-primary mt-4">Update Profile</button>
    </form>
</div>
@endrole
@role('user')
<div class="card-body">
    <h2 class="fs-xl">This is User Profile Page.</h2>
    <form action="{{ route('profile.user') }}" method="POST" enctype="multipart/form-data">
    @csrf 
    @method('PUT')
    <div class="form-group my-4">
         <input type="text" name="userName" value="{{ auth()->user()->name }}" class="form-control" placeholder="User name">
     @error('userName')
         <span style="color:red;">{{ $message }}</span>
     @enderror
     </div>
     <div class="form-group my-4">
         <input type="text" name="email" value="{{ auth()->user()->email }}" class="form-control" placeholder="User Email">
         @error('email')
         <span style="color:red;">{{ $message }}</span>
         @enderror
     </div>
     <div class="form-group my-4">
         <input type="text" name="phone"  class="form-control" placeholder="User Phone Number" value="{{ auth()->user()->phone }}">
         @error('phone')
         <span style="color:red;">{{ $message }}</span>
         @enderror
     </div>
     <div class="form-group my-4">
         <label>User Profile Pic</label>
         <input name="profile_img" type="file" class="form-control">
         @error('profile_img')
         <span style="color:red;">{{ $message }}</span>
         @enderror
     </div>
     <button class="btn btn-primary mt-4">Update Profile</button>
    </form>
</div>
@endrole
</div>



<div class="card col-lg-4">
  <div class="card-body">
    <form action="{{ route('profile.password.update') }}" method="POST">
    @csrf    
    @method('PUT')
        <input type="text" name="old_password" class="form-control mb-4" placeholder="Old Password">
        @error('old_password')
            <span style="color:red;">{{ $message }}</span>
        @enderror
        <input type="text" name="password" class="form-control mb-4" placeholder="New Password">
       @error('password')
          <span style="color:red;">{{ $message }}</span> 
       @enderror
        <input type="text" name="password_confirmation" class="form-control mb-4" placeholder="Confirm Password">
    <button class="btn btn-primary">Update Password</button>
    </form>
  </div>
</div>
</div>




@endsection
