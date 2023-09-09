

@extends('layouts.BackendLayouts')
@section('backendContent')
<div class="container mt-4">
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="fs-lg fw-medium" >All Job Categories</h3>
                </div>
                <div class="card-body p-0">
                    <table class="table">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($categories as $key=>$category)
                        <tr>
                            <td>{{ $categories->firstItem() + $key}}</td>
                            <td>{{ $category->title }}</td>
                            <td>
                                <a href="{{ route('category.edit', $category->slug) }}" class="btn btn-sm btn-primary">Edit</a>
                                <form action="{{ route('category.delete', $category->id) }}" method="POST">
                                  @csrf
                                  @method('DELETE')  
                                <button class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach 
                    </table>
                    <span>
                        {{ $categories->links() }}
                    </span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                 <h3>{{ isset($editedCategory) ? 'Edit' : 'Add' }} Category</h3>
                </div>
                <div class="card-body">
                 <form action="{{ isset($editedCategory) ? route('category.update', $editedCategory->slug) :route('category.store')}}" method="POST">
                    @csrf
                    <input value="{{ isset($editedCategory) ? $editedCategory->title : '' }}" type="text" name="title" placeholder="Category Name" class="form-control">
                    @error('title')
                        <span style="color:red;">{{ $message }}</span>
                    @enderror
                    <button class="d-block btn btn-primary btn-sm mt-3">
                    {{ isset($editedCategory) ? 'Update' : 'Add' }} Category
                    </button> 
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
