@extends('client.layout')
@section('content')
    <!--Body Content-->
    <div id="page-content">

        <div class="container">
            <div class="bredcrumbWrap">
                <div class="container breadcrumbs">
                    <a href="{{ route('index') }}" title="Back to the home page">Acasă</a>
                    <span aria-hidden="true">›</span>
                    <span>Contact</span>
                </div>
            </div>

            <div class="col">

                <div class="open-hours">
                    <strong>Date contact</strong><br>
                    Suntem bucuroși că vă aflați pe site-ul nostru și vă mulțumim pentru interesul acordat produselor
                    noastre. Dacă aveți întrebări, comentarii sau probleme, vă rugăm să ne contactați. Avem o echipă de
                    suport tehnic și servicii pentru clienți, care sunt pregătiți să vă ajute.
                </div>
                <hr>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 contact-box">
                    <h4 class="h4">Contactați-ne</h4>
                    <ul class="addressFooter">
                        <li><i class="icon anm anm-map-marker-al"></i>
                            <p>Chisinau</p>
                        </li>
                        <li class="phone"><i class="icon anm anm-phone-s"></i>
                            <p> +373 611-09-404</p>
                        </li>
                        <li class="email"><i class="icon anm anm-envelope-l"></i>
                            <p>comanda@aromaflames.shop</p>
                        </li>
                    </ul>
                </div>
                <hr>
            </div>

        </div>
    </div>
    <!--End Body Content-->

@endsection
