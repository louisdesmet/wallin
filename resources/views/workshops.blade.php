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
            <div class="containerdefault workshopcontent">
                <div class="tablecelldivs">
                    <h2 style="width: 293px;" class="ourstorytitle">Graffiti workshops</h2>
                    <div class="titleline"><div></div></div>
                </div>
                <p>Wallin’ vzw wil steeds een platform bieden voor beginnende en ervaren graffiti artiesten, 
                    maar ook voor personen die nog geen ervaring hebben met graffiti. Daarom geven wij workshops 
                    aan personen die deze kunstvorm willen leren kennen. Hebben u en uw vrienden altijd al eens graffiti 
                    willen spuiten? Benieuwd of deze kunstvorm iets voor u is? Bent u leraar van een klas of organiseert 
                    u een evenement waar een dergelijke workshop een meerwaarde kan bieden? Vraag dan nu vrijblijvend een 
                    offerte aan voor een workshop door op onderstaande knop te drukken! Hier vragen wij enkele specificaties 
                    in verband met de workshop. De aanvraag is volledig vrijblijvend, u legt nog niets vast!</p>
                <p>Waar zorgen wij voor? Éen begeleider per 15 personen, spuitbussen, stofmaskers en vinyl wegwerphandschoenen.</p>
                <p>Waar zorgen jullie voor? Een buitenlocatie, +- 1,5m² p.p. houten panelen (multiplex, vezelplaat of hardboard) of 
                    een muur voorzien van witte latexverf of een oppervlak waar we beschermende plastiek folie rond kunnen wikkelen (bijvoorbeeld een Heras hek).</p>
                <a href="#">Contacteer ons nu voor een graffiti workshop!</a>
                <img src="{{ asset('img/workshop1.jpg') }}"/>
                <img src="{{ asset('img/workshop2.jpg') }}"/>
                <img src="{{ asset('img/workshop3.jpg') }}"/>
                <div style="clear:both;"></div>
            </div>
            @include('layouts.footer')
        </div>
    </body>
</html>