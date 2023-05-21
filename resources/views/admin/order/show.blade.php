@extends('admin.layout')
@section('style')
@endsection

@section('content')

    <div class="card card-body mx-3 mx-md-4">
        <div class="row gx-4 mb-2">
            <div class="col-auto">
                <div class="avatar avatar-xl position-relative">

                    <img src="https://www.freeiconspng.com/thumbs/customers-icon/customers-icon-3.png"
                         alt="profile_image"
                         class="w-100 border-radius-lg shadow-sm">
                </div>
            </div>
            <div class="col-auto my-auto">
                <div class="h-100">
                    <h5 class="mb-1">
                        {{ $order->customer->name }}
                    </h5>
                                        <p class="mb-0 font-weight-normal text-sm">
                                            Order ID: {{ $order->id }}
                                        </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                <div class="nav-wrapper position-relative end-0">
                    <ul class="nav nav-pills nav-fill p-1">
                        {{--                        <li class="nav-item" role="presentation">--}}
                        {{--                            <a class="nav-link mb-0 px-0 py-1 " href="/inbound?cliente={{cliente['ragioneSociale']}}"--}}
                        {{--                               aria-selected="false">--}}
                        {{--                                <i class="material-icons text-lg position-relative">phone</i>--}}
                        {{--                                <span class="ms-1">Inbound</span>--}}
                        {{--                            </a>--}}
                        {{--                        </li>--}}
                        {{--                        <li class="nav-item" role="presentation">--}}
                        {{--                            <a class="nav-link mb-0 px-0 py-1 " href="/email?cliente={{cliente['ragioneSociale']}}"--}}
                        {{--                               aria-selected="false" tabindex="-1">--}}
                        {{--                                <i class="material-icons text-lg position-relative">email</i>--}}
                        {{--                                <span class="ms-1">Mail</span>--}}
                        {{--                            </a>--}}
                        {{--                        </li>--}}
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
                                <h6 class="mb-0">Order info</h6>
                            </div>
                            <div class="card-body p-3">

                                <hr class="dark horizontal">
                                {!! $order->details!!}

                            </div>
                        </div>
                    </div>
                    <div class="card col-12 col-xl-4">
                        <div class="card card-plain h-100">
                            <div class="card-header pb-0 p-3">
                                <div class="row">
                                    <div class="col-md-4 d-flex align-items-center">
                                        <h6 class="mb-0">Order Data</h6>
                                    </div>
                                    <div class="col-md-8 text-end" id="editProfile">
{{--                                        <a href="javascript:editProfile();" id="startEditProfile">--}}
                                        <a href="{{ route('order.edit', $order->id) }}" id="startEditProfile">
                                            <i class="fas fa-user-edit text-secondary text-sm" data-bs-toggle="tooltip"
                                               data-bs-placement="top" aria-hidden="true" aria-label="Edit Profile"
                                               data-bs-original-title="Edit Profile"></i><span class="sr-only">Edit
                                            Order</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-3">

                                <div class="input-group input-group-outline is-valid is-filled mb-3">
                                    <label class="form-label">Data</label>
                                    <input name="name" type="text" class="form-control w-100" onfocus="focused(this)"
                                           onfocusout="defocused(this)" value="{{ $order->order_date }}" disabled>
                                </div>
                                <div class="input-group input-group-outline is-valid is-filled mb-3">
                                    <label class="form-label">Delivery Date</label>
                                    <input name="phone" type="text" class="form-control w-100" onfocus="focused(this)"
                                           onfocusout="defocused(this)" value="{{ $order->delivery_date }}" disabled>
                                </div>
                                <div class="input-group input-group-outline is-valid is-filled mb-3">
                                    <label class="form-label">Type</label>
                                    <input name="address" type="text" class="form-control w-100" onfocus="focused(this)"
                                           onfocusout="defocused(this)" value="{{ $order->order_type }}" disabled>
                                </div>
                                <div class="input-group input-group-outline is-valid is-filled mb-3">
                                    <label class="form-label">Quantity</label>
                                    <input name="source" type="text" class="form-control w-100" onfocus="focused(this)"
                                           onfocusout="defocused(this)" value="{{ $order->quantity }}" disabled>
                                </div>
                                <div class="input-group input-group-outline is-valid is-filled mb-3">
                                    <label class="form-label">Price</label>
                                    <input name="data_registered" type="text" class="form-control w-100" onfocus="focused(this)"
                                           onfocusout="defocused(this)" value="{{ $order->price }}" disabled>
                                </div>
                                <div class="input-group input-group-outline is-valid is-filled mb-3">
                                    <label class="form-label">Sale</label>
                                    <input name="sex" type="text" class="form-control w-100" onfocus="focused(this)"
                                           onfocusout="defocused(this)" value="{{ $order->sale }}" disabled>
                                </div>
                                <div class="input-group input-group-outline is-valid is-filled mb-3">
                                    <label class="form-label">Advance Amount</label>
                                    <input name="sex" type="text" class="form-control w-100" onfocus="focused(this)"
                                           onfocusout="defocused(this)" value="{{ $order->advance_amount }}" disabled>
                                </div>
                                <div class="input-group input-group-outline is-valid is-filled mb-3">
                                    <label class="form-label">Status</label>
                                    <input name="sex" type="text" class="form-control w-100" onfocus="focused(this)"
                                           onfocusout="defocused(this)" value="{{ $order->status }}" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card col-12 col-xl-4">
                        <div class="card card-plain h-100">
                            <div class="card-header pb-0 p-3">
                                <div class="row">
                                    <div class="col-md-4 d-flex align-items-center">
                                        <h6 class="mb-0">Order Details</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-3">
                                <div class="input-group input-group-outline is-valid is-filled mb-3">
                                    <label class="form-label">Is Paid</label>
                                    <input name="sex" type="text" class="form-control w-100" onfocus="focused(this)"
                                           onfocusout="defocused(this)" value="{{ $order->is_paid }}" disabled>
                                </div>
                                <div class="input-group input-group-outline is-valid is-filled mb-3">
                                    <label class="form-label">Is Shipped</label>
                                    <input name="sex" type="text" class="form-control w-100" onfocus="focused(this)"
                                           onfocusout="defocused(this)" value="{{ $order->is_shipped }}" disabled>
                                </div>
                                <div class="input-group input-group-outline is-valid is-filled mb-3">
                                    <label class="form-label">Aroma</label>
                                    <input name="sex" type="text" class="form-control w-100" onfocus="focused(this)"
                                           onfocusout="defocused(this)" value="{{ $order->aroma }}" disabled>
                                </div>
                                <div class="input-group input-group-outline is-valid is-filled mb-3">
                                    <label class="form-label">Packaging</label>
                                    <input name="sex" type="text" class="form-control w-100" onfocus="focused(this)"
                                           onfocusout="defocused(this)" value="{{ $order->packaging }}" disabled>
                                </div>

                                <div class="input-group input-group-outline is-valid is-filled mb-3">
                                    <label class="form-label">Payment Method</label>
                                    <input name="sex" type="text" class="form-control w-100" onfocus="focused(this)"
                                           onfocusout="defocused(this)" value="{{ $order->payment_method }}" disabled>
                                </div>
                                <div class="input-group input-group-outline is-valid is-filled mb-3">
                                    <label class="form-label">Shipping Address</label>
                                    <input name="sex" type="text" class="form-control w-100" onfocus="focused(this)"
                                           onfocusout="defocused(this)" value="{{ $order->shipping_address }}" disabled>
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
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Nome
                                    </th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Note
                                    </th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Seriale
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Promiscuo
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Data
                                    </th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div class="d-flex flex-column justify-content-center">
                                                {{--                                                <h6 class="mb-0 text-sm">{{prodotto['nome']}}</h6>--}}
                                                {{--                                                <p class="text-xs text-secondary mb-0">{{prodotto['descrizione']}}</p>--}}
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        {{--                                        <p class="text-xs font-weight-bold mb-0">{{prodotto['note']}}</p>--}}
                                    </td>
                                    <td>
                                        {{--                                        <p class="text-xs text-secondary mb-0">{{prodotto['seriale']}}</p>--}}
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span
                                        {{--                                            class="badge badge-sm bg-gradient-secondary">{{prodotto['promiscuo']}}</span>--}}
                                    </td>
                                    <td class="align-middle text-center">
                                        <span
                                        {{--                                            class="text-secondary text-xs font-weight-bold">{{prodotto['data']}}</span>--}}
                                    </td>
                                    <td class="align-middle">
                                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                           data-toggle="tooltip" data-original-title="Edit user">
                                            Edit
                                        </a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    </div>

@endsection
@section('script')

@endsection
