@extends('layouts.app')

@section('content')
<div class="" style="background-image: url('../images/background2.jpg');min-height:100vh;background-repeat:no-repeat;background-size:cover;background-position:center">

    {{-- PAGE HEADER --}}
    <div class=" bg-gray-500 flex flex-wrap justify-center items-center">
            <h1 class=" uppercase font-bold text-4xl pt-8">popular streaming sites</h1>
            <p class="text-lg md:mx-36 pb-8">Searching for the best betting sites in the country?well well,you are in the right place at the right time.we are determined to provide you,our esteemed fan a summrry review of the best sites and of course later on you can choose one that satisfies your needs</p>
        
       
    </div>

    {{-- GRID --}}
   <div class="grid lg:grid-cols-3 gap-2  justify-items-center mt-8" >

    {{-- CARDS --}}

        <div class="card">
            <span class="card-header">sky sport</span>
            <img src="../images/sky.jpg" alt="" class="img-fluid" >
            <span class="span-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
            <div class="card-link">
                <a href="https://www.betensured.com/" target="_blank"   class="btn-sm bg-gray-300">view site</a>
            </div>
        </div>



       <div class="card ">
           <span class="card-header ">bein</span>
           <img src="../images/bein.png" alt="image/bein" class="img-fluid">
           <span class="span-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
           <div class="card-link ">
               <a href="https://www.adibet.com/" target="_blank"  class="btn-sm bg-gray-300">view site</a>
           </div>
       </div>


       
       <div class="card">
           <span class="card-header">BT sports</span>
           <img src="../images/bt.png" alt="" class="img-fluid">
           <span class="span-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
           <div class="card-link ">
                 <a href="https://www.freesupertips.com/"  target="_blank"  class="btn-sm bg-gray-300" >view site</a>
           </div>
       </div>


       <div class="card">
           <span class="card-header">espn</span>
           <img src="../images/espn.png" alt="" class="img-fluid">
           <span class="span-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
           <div class="card-link ">
                 <a href="https://www.solopredict.com/" target="_blank" class="btn-sm bg-gray-300">view site</a>
           </div>
       </div>


       <div class="card">
           <span class="card-header">streaam2watch</span>
           <img src="../images/stream2watch.png" alt="" class="img-fluid">
           <span class="span-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
           <div class="card-link ">
                <a href="https://betzodiac.blogspot.com/"  target="_blank" class="btn-sm bg-gray-300">view site</a>
           </div>
       </div>


       <div class="card">
           <span class="card-header"> live soccer tv</span>
           <img src="../images/live.png" alt="" class="img-fluid">
           <span class="span-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
           <div class="card-link ">
                <a href="https://soccerplatform.me/soccer-picks/" target="_blank" class="btn-sm bg-gray-300">view site</a>
           </div>
       </div>


       <div class="card">
           <span class="card-header">sonny liv</span>
           <img src="../images/sonny.jpg" alt="" class="img-fluid">
           <span class="span-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
           <div class="card-link ">
                <a href="https://matchplug.com/" target="_blank" class="btn-sm bg-gray-300">view site</a>
           </div>
       </div>


       <div class="card">
           <span class="card-header">nbc sports</span>
           <img src="../images/nbc.png" alt="" class="img-fluid">
           <span class="span-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
           <div class="card-link ">
                <a href="https://www.1960tips.com/" target="_blank" class="btn-sm bg-gray-300">view site</a>
           </div>
       </div>


       <div class="card">
           <span class="card-header">sportrar tv</span>
           <img src="../images/sportrar.jpg" alt="" class="img-fluid">
           <span class="span-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
           <div class="card-link ">
                <a href="https://www.mightytips.com/" target="_blank" class="btn-sm bg-gray-300">view site</a>
           </div>
       </div>
       


     
       
   </div>
</div>
@endsection