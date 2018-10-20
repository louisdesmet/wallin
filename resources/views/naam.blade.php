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
            <div class="containerdefault muurschildering naam">
                <div class="tablecelldivs">
                    <h2 style="width: 121px;" class="ourstorytitle">Naam</h2>
                    <div class="titleline"><div></div></div>
                </div>

                <p>Wilt u graag een muur opwaarderen aan de hand van een creatieve muurschildering? Wij maken een muurschildering geheel naar uw wensen!</p>


                <p>Elke kamer, buitenmuur, kantoor of lokaal kan omgetoverd worden tot een waar kunstwerk! Geniet bovendien van een ruim 
                    aanbod aan artiesten met elk hun eigen stijl. Zo vind u zeker een artiest die voldoet aan uw wensen!</p>

                <p>Hoe verloopt het proces?</p>

                <ol>
                    <li>U contacteert ons via dit <a href="http://wallinofficial.be/index.php?page_id=1085"><u>contactformulier voor muurschilderingen</u></a>. Hier vragen wij enkele specificaties zoals uw naam, emailadres, telefoonnummer (niet verplicht), aantal m², foto (niet verplicht) en locatie van de muur in kwestie.</li>
                    <li>Vervolgens contacteren wij u zo snel mogelijk terug met enkele vragen omtrent de muurschildering en de muur in kwestie.</li>
                    <li>Wanneer wij voldoende informatie hebben ontvangen betreffend de muurschildering zal u een portfolio ontvangen van een graffiti-artiest (eventueel meerdere) die volgens ons het best aansluit bij uw wensen. Hier zal ook een prijsindicatie worden bijgevoegd.</li>
                    <li>Wanneer er een artiest is gekozen door u komen wij langs op locatie (eventueel met de artiest) om de muurschildering te bespreken. Hier zullen de details worden besproken en kan u eventuele suggesties geven aan de artiest. Na dit gesprek wordt een offerte opgemaakt voor u.</li>
                    <li>Pas nadat er een akkoord is gekomen omtrent alle bovenstaande zaken zal de artiest een schets maken van de muurschildering. Deze wordt vervolgens doorgestuurd naar u. Wanneer u akkoord gaat met de schets bespreken we enkel nog een datum en tijdstip vooraleer we van start gaan!</li>
                </ol>

                <p>Wallin’ voorziet alles van materiaal zoals spuitbussen, afdekmateriaal, latexverf en hoogtewerker indien nodig. 
                Prijzen omtrent deze soort muurschildering kunnen variëren omwille van keuze artiest, aantal m² en ondergrond muur.</p>


                <img src="{{ asset('img/naam1.jpg') }}"/>
                <img src="{{ asset('img/naam2.jpg') }}"/>
                <div style="clear:both;"></div>
            </div>
            @include('layouts.footer')
        </div>
    </body>
</html>