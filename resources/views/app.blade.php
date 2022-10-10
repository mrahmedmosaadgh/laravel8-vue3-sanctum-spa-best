<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="{{ asset('css/fontawesome-free-6.2.0-web/css/all.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        {{-- <link href="{{ asset('css/style-rtl.min.css') }}" rel="stylesheet"> --}}
        
        <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
        <link href="{{ asset('css/hover.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/tailwindcss3.1.8.css') }}" rel="stylesheet">
          </head>

            <title>SchoolEveryThing</title>
        </head>
        <body class="bg-gray-50 h-screen antialiased leading-none font-sans">
            <div id="app">

            </div>
            @if (auth()->user())
                            <script>

                    window.user=@json(auth()->user());
                    window.user_roles=@json(auth()->user()->roles);
                    window.user_permissions=@json(auth()->user()->permissions);


                </script>
            @endif

            <script src="{{asset('css/tailwindcss.min.js')}}"></script>
                        <script>
                MathJax = {loader: {load: ['input/asciimath', 'output/chtml']}  }
            </script>
            <script src="{{mix('js/app.js')}}"></script>
            <script type="text/javascript" src="{{ asset('math/math.js') }}"></script>
        <script src="{{asset('css/fontawesome-free-6.2.0-web/js/all.js')}}"></script>


    </body>
</html>
