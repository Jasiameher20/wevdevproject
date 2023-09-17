@extends('frontend.homepage')
@section('frontendContent')
<div class="card col-lg-3 mx-2" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">{{ $appliedjobPost->jobtitle }}</h5>
        <p class="card-text">
            {{ $appliedjobPost->positiontitle }}
            {{ $appliedjobPost->jobminsalary . 'k - ' . $appliedjobPost->jobmaxsalary . 'k' }} <br />
            {{ $appliedjobPost->joblocation }}
        </p>
        <div class="">
            <h4 class="mb-4">Apply For The Job</h4>
            <form  action="{{ route('forntpost.appliedjob') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="number" hidden value="{{ $appliedjobPost->id }}" name="job_post_id">
                <div class="row g-3">
                    <div class="col-12 col-sm-6">
                        <input type="text" class="form-control" placeholder="Your Name" name="name" value="{{ old('name') }}">
                        @error('name')
                            <span>
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="col-12 col-sm-6">
                        <input type="email" class="form-control" placeholder="Your Email" name="email" value="{{ old('email') }}">
                        @error('email')
                            <span>
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="col-12 col-sm-6">
                        <input type="tel" class="form-control" placeholder="Your Phone Number"
                            name="phone_number" value="phone_number">
                        @error('phone_number')
                            <span>
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="col-12 col-sm-6">
                        <input type="file" class="form-control bg-white" name="cv" >
                        @error('cv')
                            <span>
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="col-12">
                        <input class="form-control" rows="5" name="Current_working"
                            placeholder="Current Working Company if working" name="company_name" value="{{ old('company_name') }}">
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary w-100" type="submit">Apply Now</button>
                    </div>
                </div>
            </form>
        </div>
   
    <button class="btn btn-primary w-100 text-white" type="submit">Already Applied</button>
    
        
    </div>
@endsection