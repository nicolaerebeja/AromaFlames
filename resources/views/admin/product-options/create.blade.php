@extends('admin.layout')
@section('content')
    <div class="card card-frame">
        <h3 class="mt-3 mb-0 text-center">New Product Options</h3>
        <div class="card-body">
            <form action="{{ route('product_options.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">

                        <div class="col-md-12">
                            <div class="input-group input-group-outline is-focused my-3">
                                <label class="form-label">Type Options</label>
                                <select name="type" id="type" class="form-select" required>
                                    <option value="aroma">Aroma</option>
                                    <option value="color">Color</option>
                                    <option value="options">Options</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="input-group input-group-outline is-focused my-3">
                                <label class="form-label">Stock</label>
                                <select name="stock" id="type" class="form-select" required>
                                    <option value="1">On Stock</option>
                                    <option value="0">Not in stock</option>
                                </select>
                            </div>
                        </div>

                        <div class="input-group input-group-outline my-3">
                            <label class="form-label">Name</label>
                            <input name="name" type="text" class="form-control" required>
                        </div>

                    </div>
                </div>
                <div class="row mt-4">
                    <div class="actions ms-auto text-center">
                        <button class="btn bg-gradient-warning mb-0" type="submit">Create Options</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
