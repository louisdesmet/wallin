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
                    <h2 style="width: 150px;" class="ourstorytitle">artiesten</h2>
                    <div class="titleline"><div></div></div>
                </div>  
                <div style="clear:both;"></div> 
                <div class="projectpostpre">                  
                    @foreach ($artists as $index => $artist)
                    <div  class="projectspost"> 
                        <a href="{{ route('artist', ['artist' => $artist]) }}">  
                            <div>
                                <img src="{{ asset('img/artists/' . $artist->id . '/' . $artist->featured_image) }}">
                            </div>                        
                            <h2>{{ $artist->title }}</h2>                                                                                                                                    
                        </a>      
                    </div> 
                    @endforeach                            
                </div>
                <div style="clear:both;"></div>
                <a class="meerknop">MEER ARTIESTEN</a>
                <div style="clear:both;"></div>
                <iframe class="mappinkaart" src="https://www.google.com/maps/d/embed?mid=1AibwzfFPEw6NRaIBmEDSSDhXu1E"></iframe>
            </div>
            @include('layouts.footer')
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>
            $(function() {
                let lowestHeightImage = 0;
                $('.projectpostpre img').each(function(index) {
                    if(index === 0) {
                        lowestHeightImage = $(this).height();
                    } else if(lowestHeightImage > $(this).height()) {
                        lowestHeightImage = $(this).height();
                    }
                });
                $(".projectspost a div").each(function(index) {
                    $(this).height(lowestHeightImage + 'px');         
                }); 
            });
            
        </script>
    </body>
</html>