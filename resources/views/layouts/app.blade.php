<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/app.css" rel="stylesheet">
        <title> {{config('app.name','Bet')}} </title>

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
    <body class="antialiased text-gray-600 bg-gray-900 ">
        <div>
         @include('inc.navbar')
             <main class="py-6 px-12 ">    
                 @yield('content')
             </main>  
          @include('inc.footer')
 
       </div>
    </body>
</html>
