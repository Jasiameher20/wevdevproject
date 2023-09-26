@extends('layouts.BackendLayouts')

@section('backendContent')

<div class="container">
        <div class="row">
        @forelse ($alljobpost as $post)
                <div class="card col-lg-3">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->jobtitle }}</h5>
                        <p class="card-text">
                            {{ $post->positiontitle }}
                            {{ $post->jobminsalary . 'k - ' . $post->jobmaxsalary . 'k' }} <br />
                            {{ $post->joblocation }}
                         </p>
                        <a href="{{ route('posts.detail', $post->id) }}" class="btn btn-sm btn-primary">all Details</a>
                        @if ($post->user_id == auth()->user()->id)
                            <a href="{{ route('posts.edit' , $post->id) }}" class="btn btn-sm btn-primary">Edit Post</a>
                        @endif

                        @hasrole('employer')
                        <button class="btn-{{ $post->status ? 'success' : 'secondary ' }} btn btn-sm" href="#"
                        role="button">{{ $post->status ? 'approved' : 'post is pending' }}</button>
                        @endhasrole

                        {{-- @hasanyrole(['admin', 'employer'])
                        @if ($post->status)
                            <a href="{{ route('user.JobAppliedPost',$post->id) }}" class="btn btn-sm btn-warning">Applied : {{ $post->appliedUser->count() }}</a>
                        @endif
                    @endhasanyrole --}}
                        
                    </div>
                </div>
            @empty
                <h2>Not any post uploaded yet</h2>
        @endforelse
        </div>
    </div>

@endsection