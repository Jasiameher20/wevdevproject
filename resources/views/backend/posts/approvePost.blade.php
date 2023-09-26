@extends('layouts.BackendLayouts')

@section('backendContent')

{{-- <h1>ALL SETUP ARE OK!</h1> --}}

<div class="content-wrapper">
    <div class="row">
        @forelse ($allJobPost as $post)
            <div class="card col-lg-3 mx-2" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->jobtitle }}</h5>
                    <p class="card-text">
                        {{ $post->positiontitle }} <br>
                        
                        {{ $post->jobminsalary . 'k - ' . $post->jobmaxsalary . 'k' }}
                        <br />
                        {{ $post->joblocation }}
                    </p>
                    <a href="{{ route('posts.detail', $post->id) }}" class="btn btn-sm btn-primary">all Details</a>

                    <a href="{{ route('posts.approvel', $post->id) }}" class="btn btn-sm btn-success">approve</a>

                    <a href="{{ route('posts.disapprove', $post->id) }}" class="btn btn-sm btn-danger">Not approve</a>
                </div>
            </div>
        @empty
            <h2>Not any post pending yet</h2>
        @endforelse
    </div>
</div>

@endsection