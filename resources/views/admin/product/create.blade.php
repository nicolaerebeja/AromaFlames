@extends('admin.layout')
@section('style')
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
@endsection
@section('content')
    <div class="card card-frame">
        <h3 class="mt-3 mb-0 text-center">New Product</h3>
        <div class="card-body">
            <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group input-group-outline my-3">
                            <label class="form-label">Name</label>
                            <input name="name" type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group input-group-outline is-focused my-3">
                            <label class="form-label">Stock</label>
                            <select name="stock" id="stock" class="form-select" required>
                                <option value="1">On Stock</option>
                                <option value="0">Not In Stock</option>

                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group input-group-outline is-focused my-3">
                            <label class="form-label">Category</label>
                            <select name="category" id="category" class="form-select" required>
                                @foreach($category as $cat)
                                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group input-group-outline is-focused my-3">
                            <label class="form-label">Description</label>
                            <select name="description" id="description" class="form-select" required>
                                @foreach($description as $desc)
                                    <option value="{{ $desc->id }}">{{ $desc->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="input-group input-group-outline my-3">
                            <label class="form-label">Price</label>
                            <input name="price" type="number" class="form-control" required>
                        </div>
                        <div class="input-group input-group-outline my-3">
                            <label class="form-label">Sale %</label>
                            <input name="sale" type="number" class="form-control" required>
                        </div>

                    </div>
                    <div class="col-sm-6">
                        <div class="input-group input-group-outline my-3">
                            <input type="file" name="image" class="form-control" required>
                        </div>
                    </div>

                </div>


                <div class="row mb-7">
                    <div class="col-sm-12">
                        <div id="editor">
                            <p>Descrierea lumanarii</p>
                        </div>
                        <input type="hidden" id="quillContent" name="info">
                    </div>
                </div>


                <div class="row mt-4">
                    <div class="actions ms-auto text-center">
                        <button class="btn bg-gradient-warning mb-0" type="submit">Create Product</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection

@section('script')

    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

    <!-- Initialize Quill editor -->
    <script>
        // var quill = new Quill('#editor', {
        //     theme: 'snow'
        // });
        // let body = quill.root.innerHTML;

        const form = document.querySelector('form');
        const quill = new Quill('#editor', {
            theme: 'snow'
        });

        form.addEventListener('submit', function(event) {
            const quillContent = quill.root.innerHTML;
            document.getElementById('quillContent').value = quillContent;
        });
    </script>
@endsection


