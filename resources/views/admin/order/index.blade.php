@extends('admin.layout')
@section('style')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css"/>
@endsection

@section('content')
    <a class="btn bg-gradient-warning mb-0" href="{{ route('order.create') }}">Create Order</a>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card mt-5">
        <table id="myTable" class="display mt-2">
            <thead>
            <tr>
                <th>Client</th>
                <th>Data</th>
                <th>Delivery Date</th>
                <th>Type</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Status</th>
                <th>Is Paid</th>
                <th>Is Shipped</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($orders as $order)
                <tr>
                    <td><a href="{{ route('order.show', $order->id) }}">{{ $order->customer->name }}</a></td>
                    <td>{{ $order->order_date }}</td>
                    <td>{{ $order->delivery_date }}</td>
                    <td>{{ $order->order_type }}</td>
                    <td>{{ $order->quantity }}</td>
                    <td>{{ $order->price }}</td>
                    <td>{{ $order->status }}</td>
                    <td>{{ $order->is_paid ? 'true' : 'false' }}</td>
                    <td>{{ $order->is_shipped ? 'true' : 'false' }}</td>


                    <td>
                        <a href="{{ route('order.edit', $order->id) }}">Edit</a>
                        <form action="{{ route('order.destroy', $order->id) }}" method="POST" style="display:inline;">
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
            $('#myTable').DataTable();
        });
    </script>
@endsection
