<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link href="{{ asset('css/front.css') }}" rel="stylesheet">
    </head>
    <body class="body">
        @include('layouts.nav')
        <div class="allcontainer">
            <div class="containerdefault">
                <div class="tablecelldivs">
                    <h2 style="width: 160px;" class="ourstorytitle">Over ons</h2>
                    <div class="titleline"><div></div></div>
                </div>
                <div class="ourstorytext">
                    <h4>Ons Verhaal</h4>
                    <p>Wallin’ vzw werd in 2015 opgericht met als hoofddoel een legaal alternatief 
                        te creeren voor beginnende graffiti artiesten. Door legale zones voor 
                        graffiti te openen en jams te organiseren kunnen jongeren op positieve wijze
                        hun werk tentoon  stellen en elkaar inspireren. Verder willen we ervaren 
                        artiesten een platform schenken waarop ze hun werk aan een ruimer publiek 
                        tentoon kunnen stellen. Hiermee willen we het straatbeeld lokaal en 
                        wereldwijd opfleuren door grijze of vervallen muren een opwaardering 
                        te geven met kwalitatieve muurschilderingen.</p>
                    <h4>Onze Missie</h4>
                    <p>Door het organiseren van activiteiten en evenementen met graffiti als rode 
                        draad brengen we artiesten samen om hen te promoten en inspireren. Hiermee 
                        trachten we aan te tonen dat graffiti en street art een artistieke 
                        meerwaarde kan betekenen voor de omgeving.</p>
                    <h4>Ons Team</h4>
                </div>
                <div class="ourstorycolumns">
                    <img src="{{ asset('img/rick.jpg') }}" alt=""/>
                    <div style="width: 100%; height: 4px; margin: 9px 0 0 0; background: #0F2231;"></div>
                    <h2 class="homecolumntitlebelow">Rick Molyneux</h2>
                    <p>rickmolyneux@telenet.be</p>
                    <p>+32 477 46 12 80</p>             
                </div>
                <div class="ourstorycolumns">
                    <img src="{{ asset('img/jona.png') }}" alt=""/>
                    <div style="width: 100%; height: 4px; margin: 9px 0 0 0; background: #0F2231;"></div>
                    <h2 class="homecolumntitlebelow">Jona Vanhelsuwe</h2>
                    <p>vanhelsuwejona@gmail.com</p>
                    <p>+32 470 95 17 76</p>  
                </div>
                <div class="ourstorycolumns">
                    <img src="{{ asset('img/joni.jpg') }}" alt=""/>
                    <div style="width: 100%; height: 4px; margin: 9px 0 0 0; background: #0F2231;"></div>
                    <h2 class="homecolumntitlebelow">Joni Van Nieuwenhuyse</h2>
                    <p>vannieuwenhuysejoni@gmail.com</p>
                    <p>+32 497 92 39 57</p>  
                </div>
                <div class="ourstorycolumns">
                    <img src="{{ asset('img/jolien.png') }}" alt=""/>
                    <div style="width: 100%; height: 4px; margin: 9px 0 0 0; background: #0F2231;"></div>
                    <h2 class="homecolumntitlebelow">Jolien De Waele</h2>
                    <p>jolien-dewaele@hotmail.com</p>
                    <p>+32 479 23 40 57</p>  
                </div>
                <div style="clear: both;"></div>              
            </div>
            @include('layouts.footer')
        </div>              
    </body>
</html>