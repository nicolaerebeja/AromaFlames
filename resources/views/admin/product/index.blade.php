@extends('admin.layout')
@section('style')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css"/>
@endsection

@section('content')
    <a class="btn bg-gradient-warning mb-0" href="{{ route('product.create') }}">Create Product</a>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card mt-5">
        <table id="myTable" class="display mt-2">
            <thead>
            <tr>
                <th>Name</th>
                <th>Category</th>
                <th>Stock</th>
                <th>Description</th>
                <th>Info</th>
                <th>Price</th>
                <th>Sale</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $prod)
                <tr>
                    <td><a href="{{ route('product.show', $prod->id) }}">{{ $prod->name }}</a></td>
                    <td>{{ $prod->category->name }}</td>
                    <td>{{ $prod->stock ? 'in stock' : 'not in stock' }}</td>
                    <td>{{ $prod->description->name }}</td>
                    <td>{{ substr(strip_tags($prod->info), 0, 20) }}</td>
                    <td>{{ $prod->price }}</td>
                    <td>{{ $prod->sale }}</td>

                    <td>
                        <a href="{{ route('product.edit', $prod->id) }}">Edit</a>
                        <form action="{{ route('product.destroy', $prod->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    style="color: red; border: none; background: none; padding: 0; margin: 0;">Delete
                            </button>
                        </form>
                    </td>

                </tr>
            @endforeach

            </tbody>
        </table>
    </div>

@endsection
@section('script')
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function () {
            $('#myTable').DataTable({
                scrollY: 400,
                scrollX: true,
            });
        });
    </script>
@endsection
