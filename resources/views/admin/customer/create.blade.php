@extends('admin.layout')
@section('style')
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
@endsection
@section('content')
    <div class="card card-frame">
        <h3 class="mt-3 mb-0 text-center">New Customer</h3>
        <div class="card-body">
            <form action="{{ route('customer.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group input-group-outline my-3 is-filled">
                            <label class="form-label">Name</label>
                            <input name="name" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group input-group-outline my-3 is-filled">
                            <label class="form-label">Phone</label>
                            <input name="phone" type="text" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group input-group-outline my-3 is-filled">
                            <label class="form-label">Source</label>
                            <input name="source" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group input-group-outline my-3 is-filled">
                            <label class="form-label">Address</label>
                            <input name="address" type="text" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group input-group-outline my-3 is-filled">
                            <label class="form-label">Data Registred</label>
                            <input name="data_registered" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group input-group-outline is-focused my-3">
                            <label class="form-label">Sex</label>
                            <select name="sex" id="sex" class="form-select" >
                                <option value="woman">Woman</option>
                                <option value="man">Man</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row mb-7">
                    <div class="col-sm-12">
                        <div id="editor">
                            <p>Details</p>
                        </div>
                        <input type="hidden" id="quillContent" name="details">
                    </div>
                </div>


                <div class="row mt-4">
                    <div class="actions ms-auto text-center">
                        <button class="btn bg-gradient-warning mb-0" type="submit">Create Customer</button>
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


