@extends('layouts.BackendLayouts')

@section('backendContent')
    <div class="content-wrapper">
        <div class="card col-lg-12 mx-2">
            <div class="card-body">
                <h5 class="card-title">{{ $postdetail->jobtitle }}</h5>
                <p class="card-text">
                    {{ $postdetail->positiontitle }}
                    {!! $postdetail->details!!}
                    {{ $postdetail->jobminsalary . 'k - ' . $postdetail->jobmaxsalary . 'k' }} <br />
                    {{ $postdetail->joblocation }}
                    {{ $postdetail->jobtype }}
                </p>
            </div>
        </div>
    </div>
@endsection