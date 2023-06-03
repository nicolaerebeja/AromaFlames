@extends('admin.layout')
@section('style')
@endsection

@section('content')

    <div class="card card-body mx-3 mx-md-4">
        <div class="row gx-4 mb-2">

            <div class="col-auto my-auto">
                <div class="h-100">
                    <h5 class="mb-1">
                        {{ $order->firstname }} {{ $order->lastname }}
                    </h5>
                    <p class="mb-0 font-weight-normal text-sm">
                        Order ID: {{ $order->order_id }}
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                <div class="nav-wrapper position-relative end-0">
                    <ul class="nav nav-pills nav-fill p-1">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link mb-0 px-0 py-1 " href="{{ route('order.createFromRequest', $order->id) }}"
                               aria-selected="false">
                                <i class="material-icons text-lg position-relative">group</i>
                                <span class="ms-1">Create Order</span>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link mb-0 px-0 py-1 " href=""
                               aria-selected="false" tabindex="-1">
                                <i class="material-icons text-lg position-relative">edit</i>
                                <span class="ms-1">Delete</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <form action="/modifica-cliente" method="post" id="ang_cliente">
                <input type="hidden" name="id" value="">
                <div class="row">
                    <div class=" card col-12 col-xl-4">
                        <div class="card card-plain h-100">
                            <div class="card-header pb-0 p-3">
                                <h6 class="mb-0">Order Request info</h6>
                            </div>
                            <div class="card-body p-3">

                                <hr class="dark horizontal">
                                {!! $order->order_notes!!}

                            </div>
                        </div>
                    </div>
                    <div class="card col-12 col-xl-8">
                        <div class="card card-plain h-100">
                            <div class="card-body p-3">

                                <div class="input-group input-group-outline is-valid is-filled mb-3">
                                    <label class="form-label">Data</label>
                                    <input name="name" type="text" class="form-control w-100" onfocus="focused(this)"
                                           onfocusout="defocused(this)" value="{{ $order->created_at }}" disabled>
                                </div>
                                <div class="input-group input-group-outline is-valid is-filled mb-3">
                                    <label class="form-label">Email</label>
                                    <input name="address" type="text" class="form-control w-100" onfocus="focused(this)"
                                           onfocusout="defocused(this)" value="{{ $order->email }}" disabled>
                                </div>
                                <div class="input-group input-group-outline is-valid is-filled mb-3">
                                    <label class="form-label">Phone</label>
                                    <input name="source" type="text" class="form-control w-100" onfocus="focused(this)"
                                           onfocusout="defocused(this)" value="{{ $order->phone }}" disabled>
                                </div>
                                <div class="input-group input-group-outline is-valid is-filled mb-3">
                                    <label class="form-label">Street</label>
                                    <input name="data_registered" type="text" class="form-control w-100"
                                           onfocus="focused(this)"
                                           onfocusout="defocused(this)" value="{{ $order->street }}" disabled>
                                </div>
                                <div class="input-group input-group-outline is-valid is-filled mb-3">
                                    <label class="form-label">Payment</label>
                                    <input name="sex" type="text" class="form-control w-100" onfocus="focused(this)"
                                           onfocusout="defocused(this)" value="{{ $order->payment_method }}" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-warning shadow-warning border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Orders</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Product Name</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Quantity</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Price</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aroma</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Color</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Options</th>
                                </tr>
                                </thead>
                                <tbody id="orderDetailsTable">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        var orderDetails = {!! $order->order_details !!};
        var tableBody = document.getElementById('orderDetailsTable');

        for (var key in orderDetails) {
            if (orderDetails.hasOwnProperty(key)) {
                var product = JSON.parse(orderDetails[key]);
                var row = document.createElement('tr');

                var productNameCell = document.createElement('td');
                productNameCell.textContent = product.name;
                row.appendChild(productNameCell);

                var quantityCell = document.createElement('td');
                quantityCell.textContent = product.quantity;
                row.appendChild(quantityCell);

                var priceCell = document.createElement('td');
                priceCell.textContent = product.price;
                row.appendChild(priceCell);

                var aromaCell = document.createElement('td');
                aromaCell.textContent = product.aroma;
                row.appendChild(aromaCell);

                var colorCell = document.createElement('td');
                colorCell.textContent = product.color;
                row.appendChild(colorCell);

                var optionsCell = document.createElement('td');
                optionsCell.textContent = product.options;
                row.appendChild(optionsCell);

                tableBody.appendChild(row);
            }
        }
    </script>

@endsection
@section('script')

@endsection
