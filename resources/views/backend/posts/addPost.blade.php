@extends('layouts.BackendLayouts')

@section('backendContent')
<div class="content-wrapper">

<form action="{{ isset($editPost)? route('posts.update',$editPost->id) :  route('posts.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

<div class="card">

    <div class="card-header">
    <h2>{{ isset( $editPost )? 'Update Post ': 'Add Post' }}</h2>
    </div>
<div class="card-body">
            
            
    <div class="row my-4">
        <div class="col-lg-6">

             <h3> Job Tiile:</h3>
           <input type="text"  value="{{ isset($editPost)? $editPost->jobtitle : old('Job Title') }}" name="jobtitle" class="form-control" placeholder="Job Title">
                @error('jobtitle')
                        <span class="alert alert-danger">
                            {{ $message }}
                        </span>
                @enderror
        </div>
        <div class="col-lg-6">
         
                <h3> Position Tiile:</h3>
            
                
            <input value="{{ isset($editPost)? $editPost->positiontitle : old('Position Title') }}" type="text" name="positiontitle" class="form-control" placeholder="Position Title">
            @error('positiontitle')
                        <span class="alert alert-danger">
                            {{ $message }}
                        </span>
                @enderror   
        </div>
    </div>

      <h3>Job Details :</h3>

      <textarea name="details" class="summernote">
      {!! isset($editPost)? $editPost->details :  old('details') !!}</textarea>
                @error('details')
                    <span class="alert alert-danger">
                        {{ $message }}
                    </span>
                @enderror
        <div class="row my-4 align-items-center">
            
            <div class="col-lg-4">
               <h3> Job Salary Min</h3>
               <input value="{{ isset($editPost)? $editPost->jobminsalary :  old('jobminsalary') }}" type="number" name="jobminsalary" class="form-control" placeholder="Job Salary Min">
            </div>
            <div class="col-lg-4">
                <h3> Job Salary Max</h3>
                <input value="{{ isset($editPost)? $editPost->jobmaxsalary :  old('jobmaxsalary') }}"  type="number" name="jobmaxsalary" class="form-control" placeholder="Job Salary Max">
            </div>
            <div class="col-lg-4">
                <h3> Job Location</h3>
                <input value="{{ isset($editPost)? $editPost->joblocation :  old('joblocation') }}"type="text" name="joblocation" class="form-control" placeholder="Job Location">
            </div>
        </div>


     <div class="row my-4">
        <div class="col-lg-6">
            <h3> Job Type</h3>
            <input value="{{ isset($editPost)? $editPost->jobtype :  old('jobtype') }}" type="text" placeholder="Job Type" name="jobtype"
                        class="form-control">
                    @error('jobtype')
                        <span class="alert alert-danger">
                            {{ $message }}
                        </span>
                    @enderror
        </div>
        <div class="col-lg-6">
                <h3> Job Seats</h3>
            <input  value="{{ isset($editPost)? $editPost->seat :  old('seat') }}" type="number" name="seat" class="form-control" placeholder="Job Seats">
                
        </div>
    </div>           


    <div class="row my-4">
        <div class="col-lg-6">
            <h3> Required Skill</h3>
            <textarea class="summernote" name="requiredskill" id="details">{!! isset($editPost)? $editPost->requiredskill :  old('requiredskill') !!}</textarea>
            @error('requiredskill')
                        <span class="alert alert-danger">
                            {{ $message }}
                        </span>
            @enderror
        </div>
        <div class="col-lg-6">
           <h3> Education Qulification</h3>
           <textarea class="summernote" name="education" id="details">{!! isset($editPost)? $editPost->education :  old('education') !!}</textarea>
        </div>
    </div>     
    <div class="row my-4">
        <div class="col-lg-6">
            <h3> Work Experience</h3>
            <input  value="{{ isset($editPost)? $editPost->workexperience :  old('workexperience') }}" type="number" name="workexperience" class="form-control" placeholder="Work Experience in year">
                    @error('workexperience')
                        <span class="alert alert-danger">
                            {{ $message }}
                        </span>
                    @enderror
        </div>
        <div class="col-lg-6">
            
        </div>
       
    </div>   
<button class="btn btn-primary mt-4" style="width: 100%">{{ isset($editPost)? 'Update Post ': 'Submit' }}</button>


  </div>






</div>


</form>
</div>

@push('customJs')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
        </script>
        <script src="{{ asset('summernote/summernote-bs4.min.js') }}"></script>
<script>
 
   $('.summernote').summernote({
                tabsize: 2,
                height: 300
            });
</script>



@endpush
@push('css')
        
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
        <link type="stylesheet" href="{{ asset('summernote/summernote-bs4.min.css') }}">
    @endpush

@endsection