@extends('layouts.BackendLayouts')

@section('backendContent')

<div class="content-wrapper">
    <div class="row">
        @forelse ($appliedPost as $post)
            <div class="card col-lg-3 mx-2" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->jobPost->jobtitle }}</h5>
                    <p class="card-text">
                        {{ $post->jobPost->positiontitle }}
                        {!! Str::substr($post->jobPost->details, 0, 250) !!}
                        {{ Str::length($post->jobPost->details) > 100 ? '...' : '' }}<br>
                        {{ $post->jobPost->jobminsalary . 'k - ' . $post->jobPost->jobmaxsalary . 'k' }} <br />
                        {{ $post->jobPost->joblocation }}
                    </p>
                    <a href="{{ route('posts.detail',$post->jobPost->id) }}" class="btn btn-sm btn-primary">all Details</a>
                    <a href="{{ route('userPost.denied',$post->id) }}" class="btn btn-sm btn-danger">denied Applied</a>
                </div>
            </div>
        @empty
            <h2>Not any post saved yet</h2>
        @endforelse
    </div>
</div>

@endsection