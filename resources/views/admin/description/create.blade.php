@extends('admin.layout')
@section('content')
    <div class="card card-frame">
        <h3 class="mt-3 mb-0 text-center">New Description</h3>
        <div class="card-body">
            <form action="{{ route('description.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="input-group input-group-outline my-3">
                            <label class="form-label">Description</label>
                            <input name="name" type="text" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="actions ms-auto text-center">
                        <button class="btn bg-gradient-warning mb-0" type="submit">Create Description</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
