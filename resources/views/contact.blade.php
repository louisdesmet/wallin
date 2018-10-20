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
                    <h2 style="width: 150px;" class="ourstorytitle">contact</h2>
                    <div class="titleline"><div></div></div>
                </div>

                <div style="clear:both;"></div>

                <div class="contactleft">
                    <p class="contactinfo">STEENDAM 9, 9000 GHENT, BE</p>
                    <p class="contactinfo">info@wallinofficial.be</p>
                    <p class="contactinfo">+32 477 46 12 80</p>
                    <iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJKa_jK0hxw0cRAp9D4KnR77U&key=AIzaSyC-u7zzUwJgpgqa9Fq9_hp60VvuLZlsmZI" allowfullscreen></iframe>
                </div>

                <div class="contactright">
                    <form action="" method="post">
                        <input class="textinput" name="naam" type="text" placeholder="Naam...">
                        <input class="textinput" name="email" type="text" placeholder="E-mail adres...">

                        <textarea class="textarea" name="message" placeholder="Bericht..."></textarea>
                        <div class="submitcontainer">
                            <input type="submit" value="VERZENDEN">
                        </div>
                    </form>
                </div>
                <div style="clear: both;"></div>
            </div> 
            @include('layouts.footer')
        </div>
    </body>
</html>