@extends('frontend.homepage')
@section('frontendContent')


<div class="content-wrapper container my-5">
    <div class="row gx-5">
        
    @forelse ($allPost as $post)
            <div class="card bg-light col-lg-5 my-5 py-3 mx-auto" style="
            box-shadow:  13px 13px 84px #b5b5b5,
                         -13px -13px 84px #ffffff; !importent">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->jobtitle }}</h5>
                    <p class="card-text">
                        {{ $post->positiontitle }}
                        {{ $post->jobminsalary . 'k - ' . $post->jobmaxsalary . 'k' }} <br />
                        {{ $post->joblocation }}
                    </p>
                    <br>
                    <div class="group-btn mb-3">
                        <a href="{{ route('forntpost.appliedjobpost', $post->id) }}" class="btn btn-sm btn-primary d-inline">Apply Now</a>
                    @if ($post->user_id == auth()->user()->id)
                        <a href="{{ route('posts.edit' , $post->id) }}" class="btn btn-sm btn-primary d-inline">Edit Post</a>
                    @endif 
                    </div>
                    
                </div>
            </div>
             
        @empty
            <h2>Not any post uploaded yet</h2>
    @endforelse
   
    </div>
    <span>{{ $allPost->links() }}</span> 
</div>




@endsection





