<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        
        {{-- <link href="{{ asset('css/font/fontawesome.css') }}" rel="stylesheet">
        <link href="{{ asset('css/font/svg-with-js.css') }}" rel="stylesheet">
        <link href="{{ asset('css/font/all.css') }}" rel="stylesheet">
        <link href="{{ asset('css/font/brands.css') }}" rel="stylesheet">
        <link href="{{ asset('css/font/regular.css') }}" rel="stylesheet">
        <link href="{{ asset('css/font/solid.css') }}" rel="stylesheet"> --}}
        {{-- <link href="{{ asset('css/font/regular.css') }}" rel="stylesheet"> --}}
        {{-- <link href="{{ asset('css/fontawesome.min.css') }}" rel="stylesheet"> --}}


        <link href="{{ asset('css/fontawesome-free-6.2.0-web/css/all.css') }}" rel="stylesheet">
        <script src="{{asset('css/fontawesome-free-6.2.0-web/js/all.js')}}"></script>



        





        

        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

        <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
        <link href="{{ asset('css/hover.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/tailwindcss3.1.8.css') }}" rel="stylesheet">















        {{-- <script>
            MathJax = {
              loader: {load: ['math/input/asciimath', 'math/output/chtml']}
            }
            </script> --}}

            {{-- <script type="text/javascript" async
            src="https://example.com/mathjax/MathJax.js?config=AM_CHTML"></script> --}}
          </head>
{{-- 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css" integrity="sha512-HHsOC+h3najWR7OKiGZtfhFIEzg5VRIPde0kB0bG2QRidTQqf+sbfcxCTB16AcFB93xMjnBIKE29/MjdzXE+qw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/regular.js" integrity="sha512-7UeD5YN3k1cD3D45obyeHUGTfrZEL1i+I9m1+nkFej82hsxrXTep9pbhZs5+B82MtFtvt55t8v0BE5U0NZKh5g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}








        {{-- <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet"> --}}
        {{--         
            <script src="https://cdnjs.cloudflare.com/ajax/libs/slim-select/1.27.1/slimselect.min.js"></script>
            <link href="https://cdnjs.cloudflare.com/ajax/libs/slim-select/1.27.1/slimselect.min.css" rel="stylesheet">  --}}
            {{-- <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.min.css'><link rel="stylesheet" href="./style.css"> --}}
            {{-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> --}}
            {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/js/fontawesome.min.js"></script> --}}
            {{-- <script src="https://cdn.bootcdn.net/ajax/libs/mathjax/3.2.0/es5/tex-svg.min.js"></script> --}}

            
            
            {{-- <link href="{{ asset('css/tailwindcss.min.css') }}" rel="stylesheet"> --}}



            {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script> --}}



            <title>SchoolEveryThing</title>
        </head>
        <body class="bg-gray-50 h-screen antialiased leading-none font-sans">
            {{-- <h2 class="callout-subtitle animate__animated animate__zoomInDown">Just-add-water CSS animations</h2> --}}
            <div id="app">

            </div>
            @if (auth()->user())
                            <script>

                    window.user=@json(auth()->user());
                    window.user_roles=@json(auth()->user()->roles);
                    window.user_permissions=@json(auth()->user()->permissions);


                </script>
            @endif


            {{-- <script src="{{asset('js/role.js')}}"></script> --}}
            <script src="{{asset('css/tailwindcss.min.js')}}"></script>
            


 <script src="{{mix('js/app.js')}}"></script>
            <script>
                MathJax = {loader: {load: ['input/asciimath', 'output/chtml']}  }
            </script>
            <script type="text/javascript" src="{{ asset('math/math.js') }}"></script>
            
           




            {{-- <script>
                MathJax = {
                    loader: {load: ['input/asciimath', 'output/chtml']}
                }
                <script src="{{asset('math/math.js')}}"></script>
                </script> --}}
                {{-- <script src="{{asset('math/output/chtml.js')}}"></script>
                <script src="{{asset('math/input/asciimath.js')}}"></script> --}}
            {{-- <script src="{{asset('css/tailwindforms.js')}}"></script> --}}

    </body>
</html>
