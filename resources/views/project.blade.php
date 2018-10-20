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
                <div class="singleleft">
                    <h2>{{ $project->title }}</h2>
                    <p>{{ $project->text }}</p>
                </div>
                <div class="singleright">
                    @foreach ($firstblocks as $firstblock)
                    <div>
                        <img src="{{ asset('img/projects/' . $project->id . '/' . $firstblock['basename']) }}">
                    </div>                       
                    @endforeach
                </div>
                <div style="clear:both;"></div> 
                <a class="meerknop">MEER FOTOS</a>
                <div style="clear:both;"></div>
                <div class='meerfotos'>
                    @foreach ($secondblocks as $secondblock)
                        <div>
                            <img src="{{ asset('img/projects/' . $project->id . '/' . $secondblock['basename']) }}">
                        </div>                       
                    @endforeach
                </div> 
                <div style="clear:both;"></div> 
            </div>
            @include('layouts.footer')
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>
            $(function() {
                let lowestHeightImage = 0;
                $('.singleright img, .meerfotos img').each(function(index) {
                    if(index === 0) {
                        lowestHeightImage = $(this).height();
                    } else if(lowestHeightImage > $(this).height()) {
                        lowestHeightImage = $(this).height();
                    }
                });
                let marginright;
                $(".singleright div, .meerfotos div").each(function(index) {
                    $(this).height(lowestHeightImage + 'px');         
                    if(index === 0) {
                        marginright = $(this).width() / 50;
                    }
                    $(this).css('margin-bottom', marginright);
                }); 
                $('.meerfotos').hide();
                $('.meerknop').on('click', function() {
                    $('.meerfotos').fadeToggle();
                });
                
                 
            }); 
            
        </script>
    </body>
</html>