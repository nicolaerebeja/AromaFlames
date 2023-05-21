@extends('admin.layout')
@section('style')
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
{{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">--}}

@endsection
@section('content')
    <div class="card card-frame">
        <h3 class="mt-3 mb-0 text-center">New Order</h3>
        <div class="card-body">
            <form action="{{ route('order.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group input-group-outline my-3">
                            <label class="form-label">Data</label>
                            <input name="order_date" type="text" class="form-control datepicker" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group input-group-outline my-3 ">
                            <label class="form-label">Delivery Data</label>
                            <input name="delivery_date" type="text" class="form-control datepicker" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group input-group-outline is-focused my-3">
                            <label class="form-label">Client</label>
                            <select name="client_id" id="status" class="form-select" required>
                                <option value="">Select Client</option>
                                @foreach($customers as $customer)
                                    <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group input-group-outline my-3 ">
                            <label class="form-label">Type</label>
                            <input name="order_type" type="text" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="input-group input-group-outline my-3 ">
                            <label class="form-label">Quantity</label>
                            <input name="quantity" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="input-group input-group-outline my-3 ">
                            <label class="form-label">Aroma</label>
                            <input name="aroma" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="input-group input-group-outline my-3 ">
                            <label class="form-label">Packaging</label>
                            <input name="packaging" type="text" class="form-control">
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

                <div class="row">
                    <div class="col-md-4">
                        <div class="input-group input-group-outline my-3 ">
                            <label class="form-label">Price</label>
                            <input name="price" type="number" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="input-group input-group-outline my-3 ">
                            <label class="form-label">Sale</label>
                            <input name="sale" type="number" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="input-group input-group-outline my-3 ">
                            <label class="form-label">Advance Amount</label>
                            <input name="advance_amount" type="number" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group input-group-outline is-focused my-3">
                            <label class="form-label">Status</label>
                            <select name="status" id="status" class="form-select" required>
                                <option value="assigned">Assigned</option>
                                <option value="work in progress">Work In Progress</option>
                                <option value="pending">Pending</option>
                                <option value="answered">Answered</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group input-group-outline is-focused my-3">
                            <label class="form-label">Payment Method</label>
                            <select name="payment_method" id="payment_method" class="form-select">
                                <option value="cash">Cash</option>
                                <option value="card">Card</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="input-group input-group-outline my-3 ">
                            <label class="form-label">Shipping Address</label>
                            <input name="shipping_address" type="text" class="form-control" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group input-group-outline is-focused my-3">
                            <label class="form-label">Is Paid</label>
                            <select name="is_paid" id="is_paid" class="form-select" required>
                                <option value="0">False</option>
                                <option value="1">True</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group input-group-outline is-focused my-3">
                            <label class="form-label">Is Shipped</label>
                            <select name="is_shipped" id="is_shipped" class="form-select">
                                <option value="0">False</option>
                                <option value="1">True</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="actions ms-auto text-center">
                        <button class="btn bg-gradient-warning mb-0" type="submit">Create Order</button>
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


