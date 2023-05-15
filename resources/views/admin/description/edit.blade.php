@extends('admin.layout')
@section('style')
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
@endsection
@section('content')
    <div class="card card-frame">
        <h3 class="mt-3 mb-0 text-center">Edit Description</h3>
        <div class="card-body">
            <form action="{{ route('description.update', $description->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-12">
                        <div class="input-group input-group-outline my-3">
                            <label class="form-label">Name</label>
                            <input name="name" type="text" class="form-control" value="{{$description->name}}" required>
                        </div>
                    </div>
                </div>

                <div class="row mb-7">
                    <div class="col-sm-12">
                        <div id="editor">
                            {!! $description->description !!}
                        </div>
                        <input type="hidden" id="quillContent" name="description">
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="actions ms-auto text-center">
                        <button class="btn bg-gradient-warning mb-0" type="submit">Edit Description</button>
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
