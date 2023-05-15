@extends('admin.layout')
@section('style')
@endsection

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="mb-4">Product Details</h5>
                    <div class="row">
                        <div class="col-xl-5 col-lg-6 text-center">
                            <img class="w-100 border-radius-lg shadow-lg mx-auto" src="/{{ $product->images }}"
                                 alt="chair">
                            <div class="my-gallery d-flex mt-4 pt-2" itemscope=""
                                 itemtype="http://schema.org/ImageGallery" data-pswp-uid="1">

                            </div>
                            <label class="mt-4">Description</label>
                            {!! $product->description->description !!}

                        </div>
                        <div class="col-lg-5 mx-auto">
                            <h3 class="mt-lg-0 mt-4">{{ $product->name }}</h3>
                            <br>
                            <h6 class="mb-0 mt-3">Price</h6>
                            <h5>{{ $product->price }} Mdl</h5>
                            <span class="badge badge-success">{{ $product->stock ? 'In stock' : 'Not in stock' }}</span>
                            <br>
                            <label class="mt-4">Info</label>
                            <ul>
                                {!! $product->info !!}
                            </ul>

                            <div class="row mt-4">
                                <div class="col-lg-5">
                                    <a href="{{ route('product.edit', $product->id) }}"
                                       class="btn bg-gradient-primary mb-0 mt-lg-auto w-100" type="button"
                                    >Modifica
                                    </a>
                                </div>
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
