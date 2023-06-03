@extends('client.layout')
@section('content')

    @if (session('success'))
        <div id="page-content">
            <!-- Lookbook Start -->
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="empty-page-content text-center">
                            <h1>{{ session('success') }}</h1>
                            <p><a href="{{ route('categoryProduct', 'Toate-Lumânările') }}" class="btn btn--has-icon-after">Continua cumparaturile <i class="fa fa-caret-right" aria-hidden="true"></i></a></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Lookbook Start -->
        </div>
        <script !src="">
            localStorage.clear();
        </script>
    @else
    <div id="page-content">
        <!--Page Title-->
        <div class="page section-header text-center">
            <div class="page-title">
                <div class="wrapper"><h1 class="page-width">Checkout</h1></div>
            </div>
        </div>
        <!--End Page Title-->
        <form id="checkoutForm" action="{{ route('order-request.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-3">
                        <div class="customer-box returning-customer">
                            <h3><i class="icon anm anm-user-al"></i> Client existent? <a href="#customer-login"
                                                                                         id="customer"
                                                                                         class="text-white text-decoration-underline"
                                                                                         data-toggle="collapse">Apasă
                                    aici
                                    pentru autentificare</a></h3>
                            <div id="customer-login" class="collapse customer-content">
                                <div class="customer-info">
                                    <p class="coupon-text">Dacă ai mai făcut cumpărături înainte, te rugăm să completezi
                                        detaliile în câmpurile de mai jos. Dacă ești client nou, te rog continuă către
                                        secțiunea de Facturare și Livrare.</p>
                                    <div class="row">
                                        <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                            <label for="exampleInputEmail1">Email address <span
                                                    class="r-f">*</span></label>
                                            <input type="email" class="no-margin" id="exampleInputEmail1">
                                        </div>
                                        <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                            <label for="exampleInputPassword1">Password <span
                                                    class="r-f">*</span></label>
                                            <input type="password" id="exampleInputPassword1">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-check width-100 margin-20px-bottom">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" value=""> Remember
                                                    me!
                                                </label>
                                                <a href="#" class="float-right">Forgot your password?</a>
                                            </div>
                                            <button type="submit" class="btn btn-primary mt-3">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-3">
                        <div class="customer-box customer-coupon">
                            <h3 class="font-15 xs-font-13"><i class="icon anm anm-gift-l"></i> Ai un cupon? <a
                                    href="#have-coupon" class="text-white text-decoration-underline"
                                    data-toggle="collapse">Apasă
                                    aici pentru a introduce codul tău.</a></h3>
                            <div id="have-coupon" class="collapse coupon-checkout-content">
                                <div class="discount-coupon">
                                    <div id="coupon" class="coupon-dec tab-pane active">
                                        <p class="margin-10px-bottom">Introduceți codul de cupon dacă aveți unul.</p>
                                        <label for="coupon-code">Cupon</label>
                                        <input id="coupon-code" type="text" class="mb-3">
                                        <button class="coupon-btn btn" type="submit">Aplicați cuponul</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row billing-fields">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 sm-margin-30px-bottom">
                        <div class="create-ac-content bg-light-gray padding-20px-all">
                                <fieldset>
                                    <h2 class="login-title mb-3">Detalii pentru facturare</h2>
                                    <div class="row">
                                        <div class="form-group col-md-6 col-lg-6 col-xl-6 ">
                                            <label for="input-firstname">Prenume *</label>
                                            <input name="firstname" value="" id="input-firstname" type="text" required>
                                        </div>
                                        <div class="form-group col-md-6 col-lg-6 col-xl-6 ">
                                            <label for="input-lastname">Nume *</label>
                                            <input name="lastname" value="" id="input-lastname" type="text" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6 col-lg-6 col-xl-6 ">
                                            <label for="input-email">E-Mail *</label>
                                            <input name="email" value="" id="input-email" type="email" required>
                                        </div>
                                        <div class="form-group col-md-6 col-lg-6 col-xl-6 ">
                                            <label for="input-telephone">Telefon *</label>
                                            <input name="phone" value="" id="input-telephone" type="tel" required>
                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset>

                                    <div class="row">
                                        <div class="form-group col-md-6 col-lg-6 col-xl-6 ">
                                            <label for="input-country">Țară/regiune *</label>
                                            <select name="country" id="input-country" required>
                                                <option value="RM">Republica Moldova</option>
                                                <option value="RO">România</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-md-6 col-lg-6 col-xl-6 ">
                                            <label for="input-postcode">Oras *</label>
                                            <input name="city" value="" id="input-postcode" type="text" required>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-6 col-lg-6 col-xl-6">
                                            <label for="input-address-2">Strada *</label>
                                            <input name="street" value="" id="input-address-2" type="text" required>
                                        </div>
                                        <div class="form-group col-md-6 col-lg-6 col-xl-6 ">
                                            <label for="input-city">Nr. Apartament *</label>
                                            <input name="apartment" value="" id="input-city" type="text" required>
                                        </div>
                                    </div>
                                </fieldset>


                                <fieldset>
                                    <div class="row">
                                        <div class="form-group col-md-12 col-lg-12 col-xl-12">
                                            <label for="input-company">Note pentru comandă </label>
                                            <textarea name="note" id="CartSpecialInstructions"  class="form-control resize-both" rows="3" ></textarea>
                                        </div>
                                    </div>
                                </fieldset>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="your-order-payment">
                            <div class="your-order">
                                <h2 class="order-title mb-4">Comanda ta</h2>

                                <input type="hidden" name="order_details" id="localStorageData">

                                <div class="table-responsive-sm order-table">
                                    <table class="bg-white table table-bordered table-hover text-center">
                                        <thead>
                                        <tr>
                                            <th class="text-left">Nume produs</th>
                                            <th>Preț</th>
                                            <th>Detalii</th>
                                            <th>Cantitate</th>
                                            <th>Subtotal</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                        <tfoot class="font-weight-600">
                                        <tr>
                                            <td colspan="4" class="text-right">Livrare</td>
                                            <td>50</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" class="text-right">Total</td>
                                            <td id="totalCheckout"></td>
                                        </tr>
                                        </tfoot>
                                    </table>
                                    <div class="currencymsg">Cosul de cumpărături afișează toate produsele în lei
                                        moldovenești (MDL).
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <div class="your-payment">
                                <h2 class="payment-title mb-3">Modalitate de plată</h2>
                                <div class="payment-method">
                                    <div class="form-group r">
                                        <select name="payment_method" id="input-country">
                                            <option value="numerar">Numerar la livrare</option>
                                            <option value="card">Plata cu cardul</option>
                                        </select>
                                    </div>
                                    <hr>

                                    <p class="mt-3">Datele dumneavoastră personale vor fi folosite pentru a vă procesa
                                        comanda, pentru a vă
                                        sprijini experiența pe acest site web și pentru alte scopuri descrise în
                                        politică de
                                        confidențialitate.</p>

                                    <div class="order-button-payment">
                                        <button class="btn" value="Place order" type="submit">Plasați comanda</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    @endif
@endsection
