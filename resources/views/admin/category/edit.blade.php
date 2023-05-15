@extends('admin.layout')
@section('content')
    <div class="card card-frame">
        <h3 class="mt-3 mb-0 text-center">Edit Category</h3>
        <div class="card-body">
            <form action="{{ route('category.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-12">
                        <div class="input-group input-group-outline my-3">
                            <label class="form-label">Category Name</label>
                            <input name="name" type="text" class="form-control" value="{{$category->name}}" required>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="actions ms-auto text-center">
                        <button class="btn bg-gradient-warning mb-0" type="submit">Edit Category</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
