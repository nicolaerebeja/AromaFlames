@extends('client.layout')
@section('content')
    <!--Body Content-->
    <div id="page-content">
        <!--Page Title-->
        <div class="page section-header text-center">
            <div class="page-title">
                <div class="wrapper"><h1 class="page-width">Coșul de cumpărături</h1></div>
            </div>
        </div>
        <!--End Page Title-->

        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-8 col-lg-8 main-col">
                    <form action="#" method="post" class="cart style2">
                        <table>
                            <thead class="cart__row cart__header">
                            <tr>
                                <th colspan="2" class="text-center">Produs</th>
                                <th class="text-center">Preț</th>
                                <th class="text-center">Cantitate</th>
                                <th class="text-right">Total</th>
                                <th class="action">&nbsp;</th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                            <tfoot>
                            <tr>
                                <td colspan="3" class="text-left"><a href="{{ route('categoryProduct', 'Toate-Lumânările') }}"
                                                                     class="btn--link cart-continue"><i
                                            class="icon icon-arrow-circle-left"></i> Continua cumparaturile</a></td>
                            </tr>
                            </tfoot>
                        </table>

                        <div class="currencymsg">Cosul de cumpărături afișează toate produsele în valuta locală, lei moldovenești (MDL).
                        </div>


                    </form>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 cart__footer">
                    <div class="cart-note">
                        <div class="solid-border">
                            <h5><label for="CartSpecialInstructions" class="cart-note__label small--text-center">Adăugați o notă adițională la comanda</label></h5>
                            <textarea name="note" id="CartSpecialInstructions" class="cart-note__input"></textarea>
                        </div>
                    </div>
                    <div class="solid-border">
                        <div class="row">
                            <span class="col-12 col-sm-6 cart__subtotal-title"><strong>Subtotal</strong></span>
                            <span class="col-12 col-sm-6 cart__subtotal-title cart__subtotal text-right"
                                  id="subtotal"><span class="money"></span></span>
                        </div>
                        <div class="cart__shipping">Costurile de livrare sunt calculate la finalizarea comenzii.</div>
                        <p class="cart_tearm">
                            <label>
                                <input type="checkbox" name="tearm" id="cartTearm" class="checkbox" value="tearm"
                                       required="">
                                Sunt de acord cu termenii și condițiile</label>
                        </p>
{{--                        <a id="cartCheckout" class="btn btn--small-wide checkout"  href="{{ route('checkoutView') }}">Checkout</a>--}}
                        <button id="cartCheckout" class="btn btn--small-wide checkout" >Checkout</button>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <!--End Body Content-->

@endsection
