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
            <img id="homeSliderImg1" src="{{ asset('img/home_slider/Foto-2-slieshow.jpg') }}">                    
            <img id="homeSliderImg2" src="{{ asset('img/home_slider/Foto-3-slideshow.jpg') }}">
            <img id="homeSliderImg3" src="{{ asset('img/home_slider/IMG_4878-1.jpg') }}">
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
                    <img class="buskes" src="http://wallinofficial.be/wp-content/themes/wallinyana/img/busjes.png"/>
                </div>  
                <div class="footercolumns">
                    <div class="centerer2">
                        <p>Volg ons</p>
                        <div class="socialicons">
                            <a href="https://www.facebook.com/Wallinofficial/" target="_blank"><img style="margin-right: 3px;" src="http://wallinofficial.be/wp-content/themes/wallinyana/img/FacebookIcon.png"/></a>
                            <a href="https://www.instagram.com/wallin_9000/" target="_blank"><img style="margin-left: 3px;" src="http://wallinofficial.be/wp-content/themes/wallinyana/img/InstagramIcon.png"/></a>
                            <a href="https://www.youtube.com/channel/UCGzhR3YXlzZz2kGArfMd0Fg" target="_blank"><img style="margin-left: 3px;" src="http://wallinofficial.be/wp-content/themes/wallinyana/img/youtube.png"/></a>
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
$(function () {
    let lowestHeightImage = 0;
    $('.homeSlider img').each(function (index) {
        if (index === 0) {
            lowestHeightImage = $(this).height();
        } else if (lowestHeightImage > $(this).height()) {
            lowestHeightImage = $(this).height();
        }
    });
    $(".homeSlider").height(lowestHeightImage + 'px');

    let homeSliderImgAmount = $('.homeSlider img').length;
    let current = 1;
    $('#homeSliderImg1').show();
    window.setInterval(function () {
        if (homeSliderImgAmount > current) {
            $('#homeSliderImg' + current).fadeOut(400);
            current++;
            $('#homeSliderImg' + current).fadeIn(400);
        } else {
            $('#homeSliderImg' + current).fadeOut(400);
            current = 1;
            $('#homeSliderImg' + current).fadeIn(400);
        }
    }, 5000);
});
        </script>
    </body>
</html>
