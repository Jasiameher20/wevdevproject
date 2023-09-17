@extends('frontend.homepage')
@section('frontendContent')
<div class="content-wrapper" style="padding: 10px ">
    <div class="row">
    @forelse ($allPost as $post)
            <div class="card col-lg-3 mx-2" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->jobtitle }}</h5>
                    <p class="card-text">
                        {{ $post->positiontitle }}
                        {{ $post->jobminsalary . 'k - ' . $post->jobmaxsalary . 'k' }} <br />
                        {{ $post->joblocation }}
                    </p>
                    <a href="{{ route('forntpost.appliedjobpost', $post->id) }}" class="btn btn-sm btn-primary">Apply Now</a>
                    {{-- @if ($post->user_id == auth()->user()->id)
                        <a href="{{ route('posts.edit' , $post->id) }}" class="btn btn-sm btn-primary">Edit Post</a>
                    @endif --}}
                    
                </div>
            </div>
        @empty
            <h2>Not any post uploaded yet</h2>
    @endforelse
    </div>
</div>
@endsection