<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link href="{{ asset('css/front.css') }}" rel="stylesheet">
    </head>
    <body>
        @include('layouts.nav')
        <div class="homeSlider containerdefault">
            
        </div>
        <div class="homeContainer containerdefault">
            <h4>ONS VERHAAL</h4>
            <p>Wallin’ vzw werd in 2015 opgericht met als hoofddoel een legaal alternatief te creeren voor beginnende graffiti artiesten. 
                Door legale zones voor graffiti te openen en jams te organiseren kunnen jongeren op positieve wijze hun werk tentoon  stellen en elkaar inspireren. 
                Verder willen we ervaren artiesten een platform schenken waarop ze hun werk aan een ruimer publiek tentoon kunnen stellen. 
                Hiermee willen we het straatbeeld lokaal en wereldwijd opfleuren door grijze of vervallen muren een opwaardering te geven met kwalitatieve muurschilderingen.</p>
        </div>
        <div class="footercontainer">
            <footer>
                <div class="footercolumns">        
                    <img class="buskes" src="{{ asset('img/busjes.png') }}"/>
                </div>  
                <div class="footercolumns">
                    <div class="centerer2">
                        <p>Volg ons</p>
                        <div class="socialicons">
                            <a href="https://www.facebook.com/Wallinofficial/" target="_blank"><img style="margin-right: 3px;" src="{{ asset('img/FacebookIcon.png') }}"/></a>
                            <a href="https://www.instagram.com/wallin_9000/" target="_blank"><img style="margin-left: 3px;" src="{{ asset('img/InstagramIcon.png') }}"/></a>
                            <a href="https://www.youtube.com/channel/UCGzhR3YXlzZz2kGArfMd0Fg" target="_blank"><img style="margin-left: 3px;" src="{{ asset('img/youtube.png') }}"/></a>
                        </div>
                    </div>
                </div> 
                <div class="footercolumns">
                    <div class="centerer">
                        <p>De Pintelaan 363</p>        
                        <p>9000 Gent</p>      
                        <p>België</p>    
                    </div>
                </div>
                <div class="footercolumns">
                    <div class="centerertel">
                        <p>Tel: +32 477 46 12 80</p>
                        <p>info@wallinofficial.be</p>
                        <p>Btw: BE0658826077</p>
                    </div>
                </div>
                <div class="footercolumns">
                    <ul>
                        <li><a href="index.php?page_id=6">Home</a></li>
                        <li><a href="index.php?page_id=701">Projecten</a></li>
                        <li><a href="index.php?page_id=8">Artiesten</a></li> 
                        <li><a href="index.php?page_id=790">Workshops</a></li>
                        <li><a href="index.php?page_id=16">Over ons</a></li>
                        <li><a href="index.php?page_id=12">Contact</a></li>
                    </ul> 
                </div>
            </footer>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>   
            var homesliders = [];
            @foreach ($homeslider as $slider)
                homesliders.push('{{  $slider['basename'] }}');
            @endforeach
            let counter = 1;
            $('.homeSlider').css("background-image", "url(img/home_slider/"+ homesliders[0] +")");
            window.setInterval(function () {
                $('.homeSlider').css("background-image", "url(img/home_slider/"+ homesliders[counter] +")");
                counter++;
                if(counter === 3) { counter = 0}
            }, 4000);
        </script>
    </body>
</html>
