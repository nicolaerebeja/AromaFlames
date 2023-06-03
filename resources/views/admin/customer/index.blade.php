@extends('admin.layout')
@section('style')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css"/>
@endsection

@section('content')
    <a class="btn bg-gradient-warning mb-0" href="{{ route('customer.create') }}">Create Customer</a>
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
                <th>Phone</th>
                <th>Orders</th>
                <th>Source</th>
                <th>Address</th>
                <th>Data Reg.</th>
                <th>Sex</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($customers as $cust)
                <tr>
                    <td><a href="{{ route('customer.show', $cust->id) }}">{{ $cust->name }}</a></td>
                    <td>{{ $cust->phone }}</td>
                    <td>{{ $cust->orders }}</td>
                    <td>{{ $cust->source }}</td>
                    <td>{{ $cust->address }}</td>
                    <td>{{ $cust->data_registered }}</td>
                    <td>{{ $cust->sex }}</td>

                    <td>
                        <a href="{{ route('customer.edit', $cust->id) }}">Edit</a>
                        <form action="{{ route('customer.destroy', $cust->id) }}" method="POST" style="display:inline;">
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
