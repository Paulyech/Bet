<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> {{config('app.name','Bet')}} </title>

        
        {{-- css --}}
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">



        {{-- js --}}
        
        

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
         <style>
            #menu-toggle:checked + #menu{
                display: block;
            }
            
        </style>
        
    </head>
    <body class="antialiased text-gray-600  ">
        <div class="pt-0">
         @include('inc.navbar')
             <main class="text-white bg-gray-900 ">    
                 @yield('content')
             </main> 
         @include('inc.footer') 
        </div> 
             <script src="js/app.js" > </script>
         
 
       
    </body>
</html>
