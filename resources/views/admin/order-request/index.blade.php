@extends('admin.layout')
@section('style')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css"/>
@endsection

@section('content')

    <div class="card mt-5">
        <table id="myTable" class="display mt-2">
            <thead>
            <tr>
                <th>Client</th>
                <th>Order_ID</th>
                <th>Data</th>
                <th>Phone</th>
                <th>Street</th>
            </tr>
            </thead>
            <tbody>
            @foreach($orders as $order)
                <tr>
                    <td><a href="{{ route('order-request.show', $order->id) }}">{{ $order->firstname }} {{ $order->lastname }}</a></td>
                    <td>{{ $order->order_id }}</td>
                    <td>{{ $order->created_at }}</td>
                    <td>{{ $order->phone }}</td>
                    <td>{{ $order->street }}</td>
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
