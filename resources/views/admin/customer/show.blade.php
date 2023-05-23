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
                        {{ $customer->name }}
                    </h5>
                    {{--                    <p class="mb-0 font-weight-normal text-sm">--}}
                    {{--                        Referente: nic--}}
                    {{--                    </p>--}}
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                <div class="nav-wrapper position-relative end-0">
                    <ul class="nav nav-pills nav-fill p-1">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link mb-0 px-0 py-1 " href="{{ route('order.create') }}"
                               aria-selected="false">
                                <i class="material-icons text-lg position-relative">phone</i>
                                <span class="ms-1">Create Order</span>
                            </a>
                        </li>
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
                                <h6 class="mb-0">Customer info</h6>
                            </div>
                            <div class="card-body p-3">
                                <h6> Orders: {{ $orders->count() }} </h6>
                                <h6> Total Amount: {{ $orders->sum('price') }} Mdl </h6>
                                <hr class="dark horizontal">
                            </div>
                        </div>
                    </div>
                    <div class="card col-12 col-xl-4">
                        <div class="card card-plain h-100">
                            <div class="card-header pb-0 p-3">
                                <div class="row">
                                    <div class="col-md-4 d-flex align-items-center">
                                        <h6 class="mb-0">Customer Data</h6>
                                    </div>
                                    <div class="col-md-8 text-end" id="editProfile">
                                        {{--                                        <a href="javascript:editProfile();" id="startEditProfile">--}}
                                        <a href="{{ route('customer.edit', $customer->id) }}" id="startEditProfile">
                                            <i class="fas fa-user-edit text-secondary text-sm" data-bs-toggle="tooltip"
                                               data-bs-placement="top" aria-hidden="true" aria-label="Edit Profile"
                                               data-bs-original-title="Edit Profile"></i><span class="sr-only">Edit
                                            Profile</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-3">

                                <div class="input-group input-group-outline is-valid is-filled mb-3">
                                    <label class="form-label">Name</label>
                                    <input name="name" type="text" class="form-control w-100" onfocus="focused(this)"
                                           onfocusout="defocused(this)" value="{{ $customer->name }}" disabled>
                                </div>
                                <div class="input-group input-group-outline is-valid is-filled mb-3">
                                    <label class="form-label">Phone</label>
                                    <input name="phone" type="text" class="form-control w-100" onfocus="focused(this)"
                                           onfocusout="defocused(this)" value="{{ $customer->phone }}" disabled>
                                </div>
                                <div class="input-group input-group-outline is-valid is-filled mb-3">
                                    <label class="form-label">Address</label>
                                    <input name="address" type="text" class="form-control w-100" onfocus="focused(this)"
                                           onfocusout="defocused(this)" value="{{ $customer->address }}" disabled>
                                </div>
                                <div class="input-group input-group-outline is-valid is-filled mb-3">
                                    <label class="form-label">Source</label>
                                    <input name="source" type="text" class="form-control w-100" onfocus="focused(this)"
                                           onfocusout="defocused(this)" value="{{ $customer->source }}" disabled>
                                </div>
                                <div class="input-group input-group-outline is-valid is-filled mb-3">
                                    <label class="form-label">Data Reg.</label>
                                    <input name="data_registered" type="text" class="form-control w-100"
                                           onfocus="focused(this)"
                                           onfocusout="defocused(this)" value="{{ $customer->data_registered }}"
                                           disabled>
                                </div>
                                <div class="input-group input-group-outline is-valid is-filled mb-3">
                                    <label class="form-label">Sex</label>
                                    <input name="sex" type="text" class="form-control w-100" onfocus="focused(this)"
                                           onfocusout="defocused(this)" value="{{ $customer->sex }}" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card col-12 col-xl-4">
                        <div class="card card-plain h-100">
                            <div class="card-header pb-0 p-3">
                                <div class="row">
                                    <div class="col-md-4 d-flex align-items-center">
                                        <h6 class="mb-0">Customer Details</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-3">
                                {!! $customer->details!!}

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
                                        Data
                                    </th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Status
                                    </th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Type
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Quantity
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Price
                                    </th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{$order->delivery_date}}</h6>
                                                    <p class="text-xs text-secondary mb-0">{{$order->order_date }}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{$order->status}}</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{$order->order_type}}</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span
                                                class="badge badge-sm bg-gradient-secondary">{{$order->quantity}}</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span
                                                class="text-secondary text-xs font-weight-bold">{{$order->price}}</span>
                                        </td>
                                        <td class="align-middle">
                                            <a href="{{ route('order.edit', $order->id) }}">Edit</a>

                                            <a href="{{ route('order.edit', $order->id) }}"
                                               style="color: green">Show</a>
                                        </td>
                                    </tr>
                                @endforeach
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
