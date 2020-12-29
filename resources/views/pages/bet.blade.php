@extends('layouts.app')

@section('content')
<div class="" style="background-image: url('../images/background2.jpg');min-height:100vh;background-repeat:no-repeat;background-size:cover;background-position:center">

    {{-- PAGE HEADER --}}
    <div class=" bg-gray-500 flex flex-wrap justify-center items-center">
            <h1 class=" uppercase font-bold text-4xl pt-8">popular betting sites</h1>
            <p class="text-lg md:mx-36 pb-8">Searching for the best betting sites in the country?well well,you are in the right place at the right time.we are determined to provide you,our esteemed fan a summrry review of the best sites and of course later on you can choose one that satisfies your needs</p>
        
       
    </div>

    {{-- GRID --}}
   <div class="grid lg:grid-cols-3 gap-2  justify-items-center mt-8" >

    {{-- CARDS --}}

        <div class="card ">
            <span class="card-header">sportpesa</span>
            <img src="../images/sportpesa.jpg" alt="" class="img-fluid" >
            <span class="span-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
            <div class="card-link ">
                <a href="https://www.betensured.com/" target="_blank"   class="btn-sm bg-gray-300">view site</a>
            </div>
        </div>



       <div class="card ">
           <span class="card-header ">betway</span>
           <img src="../images/betway.jpg" alt="image/sportpesa" class="img-fluid">
           <span class="span-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
           <div class="card-link ">
               <a href="https://www.adibet.com/" target="_blank"  class="btn-sm bg-gray-300">view site</a>
           </div>
       </div>


       
       <div class="card">
           <span class="card-header">betika</span>
           <img src="../images/betika.jpg" alt="" class="img-fluid">
           <span class="span-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
           <div class="card-link ">
                 <a href="https://www.freesupertips.com/"  target="_blank"  class="btn-sm bg-gray-300" >view site</a>
           </div>
       </div>


       <div class="card">
           <span class="card-header">betpawa</span>
           <img src="../images/betpawa.jpg" alt="" class="img-fluid">
           <span class="span-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
           <div class="card-link ">
                 <a href="https://www.solopredict.com/" target="_blank" class="btn-sm bg-gray-300">view site</a>
           </div>
       </div>


       <div class="card">
           <span class="card-header">22bet</span>
           <img src="../images/22bet.png" alt="" class="img-fluid">
           <span class="span-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
           <div class="card-link ">
                <a href="https://betzodiac.blogspot.com/"  target="_blank" class="btn-sm bg-gray-300">view site</a>
           </div>
       </div>


       <div class="card">
           <span class="card-header"> bet365</span>
           <img src="../images/bet365.png" alt="" class="img-fluid">
           <span class="span-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
           <div class="card-link ">
                <a href="https://soccerplatform.me/soccer-picks/" target="_blank" class="btn-sm bg-gray-300">view site</a>
           </div>
       </div>


       <div class="card">
           <span class="card-header">betyetu</span>
           <img src="../images/betyetu.jpg" alt="" class="img-fluid">
           <span class="span-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
           <div class="card-link ">
                <a href="https://matchplug.com/" target="_blank" class="btn-sm bg-gray-300">view site</a>
           </div>
       </div>


       <div class="card">
           <span class="card-header">dafabet</span>
           <img src="../images/dafabet.jpg" alt="" class="img-fluid">
           <span class="span-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
           <div class="card-link ">
                <a href="https://www.1960tips.com/" target="_blank" class="btn-sm bg-gray-300">view site</a>
           </div>
       </div>


       <div class="card">
           <span class="card-header">sportybet</span>
           <img src="../images/sportybet.png" alt="" class="img-fluid">
           <span class="span-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
           <div class="card-link ">
                <a href="https://www.mightytips.com/" target="_blank" class="btn-sm bg-gray-300">view site</a>
           </div>
       </div>
       


       <div class="card">
           <span class="card-header">bet winner</span>
           <img src="../images/betwinner.jpg" alt="" class="img-fluid">
           <span class="span-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
           <div class="card-link ">
                <a href="https://matchplug.com/" target="_blank" class="btn-sm bg-gray-300">view site</a>
           </div>
       </div>


       <div class="card">
           <span class="card-header">melbet</span>
           <img src="../images/melbet.jpg" alt="" class="img-fluid">
           <span class="span-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
           <div class="card-link ">
                <a href="https://www.1960tips.com/" target="_blank" class="btn-sm bg-gray-300">view site</a>
           </div>
       </div>


       <div class="card">
           <span class="card-header">mcheza</span>
           <img src="../images/mcheza.png" alt="" class="img-fluid">
           <span class="span-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
           <div class="card-link ">
                <a href="https://www.mightytips.com/" target="_blank" class="btn-sm bg-gray-300">view site</a>
           </div>
       </div>
       
   </div>
</div>
@endsection