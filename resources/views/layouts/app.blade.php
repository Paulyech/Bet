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
    <body class="antialiased text-gray-600  ">
        <div>
         @include('inc.navbar')
             <main class="text-white bg-gray-900 ">    
                 @yield('content')
             </main> 
             <script>
        
                const showContent = document.querySelector('#show-content');
                const overlay = document.querySelector('#overlay');
                const closeBtn = document.querySelector('#close-btn');
                const cancelBtn = document.querySelector('#cancel-btn');
                
                showContent.addEventListener('click', ()=>{
                    overlay.classList.remove('hidden')
                    overlay.classList.add('flex') 
    
                })
                closeBtn.addEventListener('click', ()=>{
                    overlay.classList.add('hidden')
                    overlay.classList.remove('flex') 
    
                })
                cancelBtn.addEventListener('click', ()=>{
                    overlay.classList.add('hidden')
                    overlay.classList.remove('flex') 
    
                })
          
        </script>
          @include('inc.footer')
 
       </div>
    </body>
</html>
