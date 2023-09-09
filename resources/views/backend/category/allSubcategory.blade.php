

@extends('layouts.BackendLayouts')
@section('backendContent')
<div class="container mt-4">
    <div class="row">
    <div class="col-lg-8">

<div class="card mt-4">
    <div class="card-header">
        <h3 class="fs-lg fw-medium">All Sub-categories</h3>
    </div>
    <div class="card-body p-0">
        <table class="table">

            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Parent Category</th>
             
            </tr>
            @foreach ($subcategories as $key=>$subCategory)
                <tr>
                    <td>{{ ++$key }}</td>
                    <td>{{  $subCategory->title}}</td>
                    <td>
                        {{ $subCategory->category->title }}
                    </td>
                    
                </tr>
            @endforeach
            




        </table>
        <span>
            
        </span>


    </div>
</div>


</div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h3> Sub-categories</h3>
                </div>
                <div class="card-body">
                    <form
                        action="{{ route('subcategories.store') }}"
                        method="POST">
                        @csrf
                    
                        <select name="category_id" class="form-control">
                            <option disabled selected>Please Select a Option</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                            @endforeach
                        </select>

                        <input value="" type="text"
                            name="title" placeholder="Category Name" class="form-control">
                        @error('title')
                        <span>{{ $message }}</span>
                        @enderror
                        <button class="btn btn-primary btn-sm mt-3">Add
                            Sub-categories  </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
