@extends('admin.layout')
@section('content')
    <a class="btn bg-gradient-warning mb-0" href="{{ route('product-options.create') }}">Create Product Options</a>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-secondary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Arome</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">id
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Name
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Stock
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">

                                    </th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($productoption as $option)
                                    @if($option->aroma)
                                    <tr>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $option->id }}</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $option->aroma }}</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $option->stock == 1 ? 'On Stock' : 'Not in Stock' }}</p>
                                        </td>
                                        <td class="align-middle">
                                            <form action="{{ route('product-options.update', $option->id) }}" method="POST"
                                                  style="display: inline-block;">
                                                @csrf
                                                @method('PUT')
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-primary">{{ $option->stock == 0 ? 'On Stock' : 'Not in Stock' }}</button>
                                            </form>

                                            <form action="{{ route('product-options.destroy', $option->id) }}" method="POST"
                                                  style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endif
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-secondary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Colors</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">id
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Name
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Stock
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">

                                    </th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($productoption as $option)
                                    @if($option->color)
                                        <tr>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{ $option->id }}</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{ $option->color }}</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{ $option->stock == 1 ? 'On Stock' : 'Not in Stock' }}</p>
                                            </td>
                                            <td class="align-middle">
                                                <form action="{{ route('product-options.update', $option->id) }}" method="POST"
                                                      style="display: inline-block;">
                                                    @csrf
                                                    @method('PUT')
                                                    @csrf
                                                    <button type="submit" class="btn btn-sm btn-primary">{{ $option->stock == 0 ? 'On Stock' : 'Not in Stock' }}</button>
                                                </form>

                                                <form action="{{ route('product-options.destroy', $option->id) }}" method="POST"
                                                      style="display: inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-secondary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Options</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">id
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Name
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Stock
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">

                                    </th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($productoption as $option)
                                    @if($option->options)
                                        <tr>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{ $option->id }}</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{ $option->options }}</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{ $option->stock == 1 ? 'On Stock' : 'Not in Stock' }}</p>
                                            </td>
                                            <td class="align-middle">
                                                <form action="{{ route('product-options.update', $option->id) }}" method="POST"
                                                      style="display: inline-block;">
                                                    @csrf
                                                    @method('PUT')
                                                    @csrf
                                                    <button type="submit" class="btn btn-sm btn-primary">{{ $option->stock == 0 ? 'On Stock' : 'Not in Stock' }}</button>
                                                </form>

                                                <form action="{{ route('product-options.destroy', $option->id) }}" method="POST"
                                                      style="display: inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
