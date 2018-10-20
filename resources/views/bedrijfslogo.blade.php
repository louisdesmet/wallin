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
            <div class="containerdefault muurschildering bedrijfslogo">
                <div class="tablecelldivs">
                    <h2 style="width: 205px;" class="ourstorytitle">Bedrijfslogo</h2>
                    <div class="titleline"><div></div></div>
                </div>
                <p>Een bedrijfslogo in het groot laten schilderen door een professionele graffiti artiest? Dat kan!</p>

                <p>Hoe verloopt het proces?</p>

                <ol>
                    <li>U contacteert ons via dit <a href="http://wallinofficial.be/index.php?page_id=1085"><u>contactformulier voor muurschilderingen</u></a>. Hier vragen wij enkele specificaties zoals uw naam, emailadres, telefoonnummer (niet verplicht), aantal m², foto (niet verplicht) en locatie van de muur in kwestie.</li>
                    <li>Vervolgens contacteren wij u zo snel mogelijk terug met enkele vragen omtrent het logo, het bedrijf en de muur in kwestie. Indien nodig, wordt er een bezoek op locatie ingepland.</li>
                    <li>Nadat we beschikken over alle nodige informatie maken wij een offerte op.</li>
                    <li>Wanneer er een akkoord is gekomen omtrent alle bovenstaande zaken voeren wij de muurschildering zo snel mogelijk uit!</li>
                </ol>


                <p>Wallin’ voorziet alles van materiaal zoals spuitbussen, afdekmateriaal, latexverf en hoogtewerker indien nodig. 
                    Prijzen omtrent deze soort muurschildering kunnen variëren omwille van het aantal m², kleuren en ondergrond van de muur.</p>

                <img src="{{ asset('img/bedrijfslogo.jpg') }}"/>
                <div style="clear:both;"></div>
            </div>
            @include('layouts.footer')
        </div>
    </body>
</html>