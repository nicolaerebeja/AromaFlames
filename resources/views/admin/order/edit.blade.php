@extends('admin.layout')
@section('style')
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    {{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">--}}

@endsection
@section('content')
    <div class="card card-frame">
        <h3 class="mt-3 mb-0 text-center">Edit Order</h3>
        <div class="card-body">
            <form action="{{ route('order.update', $order->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group input-group-outline is-focused my-3">
                            <label class="form-label">Data</label>
                            <input name="order_date" type="text" class="form-control datepicker"
                                   value="{{ $order->formatted_order_date }}" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group input-group-outline is-focused my-3 ">
                            <label class="form-label">Delivery Data</label>
                            <input name="delivery_date" type="text" class="form-control datepicker"
                                   value="{{ $order->formatted_delivery_date }}" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group input-group-outline is-focused is-focused my-3">
                            <label class="form-label">Client</label>
                            <select name="client_id" id="status" class="form-select" required>
                                <option value="{{ $order->client_id }}" selected>{{ $order->customer->name }}</option>
                                @foreach($customers as $customer)
                                    <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group input-group-outline is-focused my-3 ">
                            <label class="form-label">Type</label>
                            <input name="order_type" type="text" class="form-control" value="{{ $order->order_type }}">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="input-group input-group-outline is-focused my-3 ">
                            <label class="form-label">Quantity</label>
                            <input name="quantity" type="text" class="form-control" value="{{ $order->quantity }}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="input-group input-group-outline is-focused my-3 ">
                            <label class="form-label">Aroma</label>
                            <input name="aroma" type="text" class="form-control" value="{{ $order->aroma }}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="input-group input-group-outline is-focused my-3 ">
                            <label class="form-label">Packaging</label>
                            <input name="packaging" type="text" class="form-control" value="{{ $order->packaging }}">
                        </div>
                    </div>
                </div>

                <div class="row mb-7">
                    <div class="col-sm-12">
                        <div id="editor">
                            {!! $order->details !!}
                        </div>
                        <input type="hidden" id="quillContent" name="details">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="input-group input-group-outline is-focused my-3 ">
                            <label class="form-label">Price</label>
                            <input name="price" type="number" class="form-control" value="{{ $order->price }}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="input-group input-group-outline is-focused my-3 ">
                            <label class="form-label">Sale</label>
                            <input name="sale" type="number" class="form-control" value="{{ $order->sale }}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="input-group input-group-outline is-focused my-3 ">
                            <label class="form-label">Advance Amount</label>
                            <input name="advance_amount" type="number" class="form-control"
                                   value="{{ $order->advance_amount }}">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group input-group-outline is-focused is-focused my-3">
                            <label class="form-label">Status</label>
                            <select name="status" id="status" class="form-select" required>
                                <option value="assigned" {{ $order->status == 'assigned' ? 'selected' : '' }}>Assigned</option>
                                <option value="work in progress" {{ $order->status == 'work in progress' ? 'selected' : '' }}>Work In Progress</option>
                                <option value="pending" {{ $order->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                <option value="answered" {{ $order->status == 'answered' ? 'selected' : '' }}>Answered</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group input-group-outline is-focused is-focused my-3">
                            <label class="form-label">Payment Method</label>
                            <select name="payment_method" id="payment_method" class="form-select">
                                <option value="cash" {{ $order->payment_method == 'cash' ? 'selected' : '' }}>Cash</option>
                                <option value="card" {{ $order->payment_method == 'card' ? 'selected' : '' }}>Card</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="input-group input-group-outline is-focused my-3 ">
                            <label class="form-label">Shipping Address</label>
                            <input name="shipping_address" type="text" class="form-control" required
                                   value="{{ $order->shipping_address }}">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group input-group-outline is-focused is-focused my-3">
                            <label class="form-label">Is Paid</label>
                            <select name="is_paid" id="is_paid" class="form-select" required>
                                <option value="0" {{ $order->is_paid == 0 ? 'selected' : '' }}>False</option>
                                <option value="1" {{ $order->is_paid == 1 ? 'selected' : '' }}>True</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group input-group-outline is-focused is-focused my-3">
                            <label class="form-label">Is Shipped</label>
                            <select name="is_shipped" id="is_shipped" class="form-select">
                                <option value="0" {{ $order->is_shipped == 0 ? 'selected' : '' }}>False</option>
                                <option value="1" {{ $order->is_shipped == 1 ? 'selected' : '' }}>True</option>
                            </select>

                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="actions ms-auto text-center">
                        <button class="btn bg-gradient-warning mb-0" type="submit">Update Order</button>
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
        $('.datepicker').datepicker({
            format: 'dd/mm/yyyy',
            autoclose: true,
        });

        const form = document.querySelector('form');
        const quill = new Quill('#editor', {
            theme: 'snow'
        });

        form.addEventListener('submit', function (event) {
            const quillContent = quill.root.innerHTML;
            document.getElementById('quillContent').value = quillContent;
        });
    </script>
@endsection


