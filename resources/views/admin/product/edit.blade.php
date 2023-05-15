@extends('admin.layout')
@section('style')
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
@endsection
@section('content')
    <div class="card card-frame">
        <h3 class="mt-3 mb-0 text-center">Edit Product</h3>
        <div class="card-body">
            <form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group input-group-outline my-3">
                            <label class="form-label">Name</label>
                            <input name="name" type="text" class="form-control" value="{{ $product->name }}" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group input-group-outline is-focused my-3">
                            <label class="form-label">Stock</label>
                            <select name="stock" id="stock" class="form-select" required>
                                <option value="1" @if($product->stock) selected @endif>In stock</option>
                                <option value="0" @if(!$product->stock) selected @endif>Not in stock</option>
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
                                    <option value="{{ $cat->id }}" @if($cat->id == $product->category_id) selected @endif>{{ $cat->name }}</option>
                                @endforeach
                            </select>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group input-group-outline is-focused my-3">
                            <label class="form-label">Description</label>
                            <select name="description" id="description" class="form-select" required>
                                @foreach($description as $desc)
                                    <option value="{{ $desc->id }}" @if($desc->id == $product->description_id) selected @endif>{{ $desc->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="input-group input-group-outline my-3">
                            <label class="form-label">Price</label>
                            <input name="price" type="number" class="form-control" value="{{$product->price}}" required>
                        </div>
                        <div class="input-group input-group-outline my-3">
                            <label class="form-label">Sale %</label>
                            <input name="sale" type="number" class="form-control" value="{{$product->sale}}" required>
                        </div>

                    </div>
                    <div class="col-sm-6">
                        <div class="input-group input-group-outline my-3">
                            <input type="file" name="image" class="form-control" >
                        </div>
                    </div>

                </div>


                <div class="row mb-7">
                    <div class="col-sm-12">
                        <div id="editor">
                            {!! $product->info !!}
                        </div>
                        <input type="hidden" id="quillContent" name="info">
                    </div>
                </div>


                <div class="row mt-4">
                    <div class="actions ms-auto text-center">
                        <button class="btn bg-gradient-warning mb-0" type="submit">Modifica Product</button>
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


