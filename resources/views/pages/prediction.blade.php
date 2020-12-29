@extends('layouts.app')

@section('content')
    <div class="" style="background-image: url('../images/background2.jpg');min-height:100vh;background-repeat:no-repeat;background-size:cover;background-position:center">

        {{-- PAGE HEADER --}}
        <div class=" bg-gray-500 flex flex-wrap justify-center items-center">
            <h1 class=" uppercase font-bold text-4xl pt-8">popular prediction sites</h1>
            <p class="text-lg md:mx-36 pb-8">Perhaps you might be in need of guidance before placing a bet,we got you covered pal.We provide a shortcut to the best prediction sites,tested an dproven</p>
        
       
        </div>

        {{-- GRID --}}
       <div class="grid lg:grid-cols-3 gap-2  justify-items-center mt-8" >

        {{-- CARDS --}}

            <div class="card ">
                <span class="card-header">betensured</span>
                <img src="../images/betensured.jpg" alt="" class="img-fluid" >
                <span class="span-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
                <div class="mt-10 ">
                    <a href="https://www.betensured.com/" target="_blank"   class="btn-sm bg-gray-300">view site</a>
                </div>
            </div>



           <div class="card h-80">
               <span class="card-header ">adibet</span>
               <img src="../images/adibet.jpg" alt="image/sportpesa" class="img-fluid">
               <span class="span-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
               <div class="mt-10 ">
                   <a href="https://www.adibet.com/" target="_blank"  class="btn-sm bg-gray-300">view site</a>
               </div>
           </div>


           
           <div class="card">
               <span class="card-header">freesupertips</span>
               <img src="../images/freesuper.png" alt="" class="img-fluid">
               <span class="span-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
               <div class="mt-10 ">
                     <a href="https://www.freesupertips.com/"  target="_blank"  class="btn-sm bg-gray-300" >view site</a>
               </div>
           </div>


           <div class="card">
               <span class="card-header">solopredict.com</span>
               <img src="../images/solopredict.png" alt="" class="img-fluid">
               <span class="span-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
               <div class="mt-10 ">
                     <a href="https://www.solopredict.com/" target="_blank" class="btn-sm bg-gray-300">view site</a>
               </div>
           </div>


           <div class="card">
               <span class="card-header">Betzodiac</span>
               <img src="../images/betzodiac.png" alt="" class="img-fluid">
               <span class="span-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
               <div class="mt-10 ">
                    <a href="https://betzodiac.blogspot.com/"  target="_blank" class="btn-sm bg-gray-300">view site</a>
               </div>
           </div>


           <div class="card">
               <span class="card-header">Soccer Platform</span>
               <img src="../images/soccerplatform.png" alt="" class="img-fluid">
               <span class="span-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
               <div class="mt-10 ">
                    <a href="https://soccerplatform.me/soccer-picks/" target="_blank" class="btn-sm bg-gray-300">view site</a>
               </div>
           </div>


           <div class="card">
               <span class="card-header">Matchplug</span>
               <img src="../images/matchplug.jpg" alt="" class="img-fluid">
               <span class="span-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
               <div class="mt-10 ">
                    <a href="https://matchplug.com/" target="_blank" class="btn-sm bg-gray-300">view site</a>
               </div>
           </div>


           <div class="card">
               <span class="card-header">1960tips</span>
               <img src="../images/1960tips.jpg" alt="" class="img-fluid">
               <span class="span-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
               <div class="mt-10 ">
                    <a href="https://www.1960tips.com/" target="_blank" class="btn-sm bg-gray-300">view site</a>
               </div>
           </div>


           <div class="card">
               <span class="card-header">mightytips</span>
               <img src="../images/mightytips.jpg" alt="" class="img-fluid">
               <span class="span-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
               <div class="mt-10 ">
                    <a href="https://www.mightytips.com/" target="_blank" class="btn-sm bg-gray-300">view site</a>
               </div>
           </div>
           
       </div>
    </div>
@endsection