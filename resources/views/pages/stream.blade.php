@extends('layouts.app')

@section('content')
<div class="" style="background-image: url('../images/background2.jpg');min-height:100vh;background-repeat:no-repeat;background-size:cover;background-position:center">

    {{-- PAGE HEADER --}}
    <div class=" bg-gradient-to-r from-gray-300 via-gray-500 to-gray-700 flex flex-wrap justify-center items-center">
            <h1 class=" uppercase font-bold text-4xl pt-8">popular streaming sites</h1>
            <p class="text-lg md:mx-36 pb-8">Searching for the best betting sites in the country?well well,you are in the right place at the right time.we are determined to provide you,our esteemed fan a summrry review of the best sites and of course later on you can choose one that satisfies your needs</p>
        
       
    </div>

    {{-- GRID --}}
   <div class="grid lg:grid-cols-3 gap-2  justify-items-center mt-8" >

    {{-- CARDS --}}

        <div class="card">
            <span class="card-header">sky sport</span>
            <img src="../images/sky.jpg" alt="" class="img-fluid" >
            <div class="card-link">
                <a href="https://www.skysports.com/watch" target="_blank"   class="btn-sm bg-gray-300">view site</a>
            </div>
        </div>



       <div class="card ">
           <span class="card-header ">bein</span>
           <img src="../images/bein.png" alt="image/bein" class="img-fluid">
           <div class="card-link ">
               <a href="https://www.beinsports.com/en/football/live" target="_blank"  class="btn-sm bg-gray-300">view site</a>
           </div>
       </div>


       
       <div class="card">
           <span class="card-header">BT sports</span>
           <img src="../images/bt.png" alt="" class="img-fluid">
           <div class="card-link ">
                 <a href="https://www.bt.com/sport/football/features/live-football-on-bt-sport"  target="_blank"  class="btn-sm bg-gray-300" >view site</a>
           </div>
       </div>


       <div class="card">
           <span class="card-header">espn</span>
           <img src="../images/espn.png" alt="" class="img-fluid">
           <div class="card-link ">
                 <a href="https://www.espn.com/soccer/" target="_blank" class="btn-sm bg-gray-300">view site</a>
           </div>
       </div>


       <div class="card">
           <span class="card-header">streaam2watch</span>
           <img src="../images/stream2watch.png" alt="" class="img-fluid">
           <div class="card-link ">
                <a href="http://stream2watchtv.org/"  target="_blank" class="btn-sm bg-gray-300">view site</a>
           </div>
       </div>


       <div class="card">
           <span class="card-header"> live soccer tv</span>
           <img src="../images/live.png" alt="" class="img-fluid">
           <div class="card-link ">
                <a href="https://www.livesoccertv.com/" target="_blank" class="btn-sm bg-gray-300">view site</a>
           </div>
       </div>


       <div class="card">
           <span class="card-header">sonny liv</span>
           <img src="../images/sonny.jpg" alt="" class="img-fluid">
           <div class="card-link ">
                <a href="https://play.google.com/store/apps/details?id=com.sonyliv&hl=en&gl=US" target="_blank" class="btn-sm bg-gray-300">view site</a>
           </div>
       </div>


       <div class="card">
           <span class="card-header">nbc sports</span>
           <img src="../images/nbc.png" alt="" class="img-fluid">
           <div class="card-link ">
                <a href="https://www.nbcsports.com/" target="_blank" class="btn-sm bg-gray-300">view site</a>
           </div>
       </div>


       <div class="card">
           <span class="card-header">sportrar tv</span>
           <img src="../images/sportrar.jpg" alt="" class="img-fluid">
           <div class="card-link ">
                <a href="https://www.sportrar.tv/?__cf_chl_jschl_tk__=6b9e8b38957650419176cbf0ab5250ee9a2c6ab3-1609327289-0-AX3TkyO-Wch4r2I_kVdHHqTli83SX3DSGiHrmG6wPCMEMDcpTQQ7UNjZO7ZYzlrIhDIj66sJAqHkbG_v6deNECDf68Nwm8mZfX81srfCaRz-UntqJ5OJXEIeyLE5haewhaNuoucNwIvKr3mZ3dQS-o7lZDkRssf_jpeNNHU0GHHmTYWDVOhCUlv6fHH4YRPixz0WXkx6cNlKpsUzUQbpBLMfS4YKQk2kBnay3SC_ZVFd36KwO-AJ7nLbPb8i_5Ct5LnnIZHwBAfox9SC7vgxdh4DmemnCGYIMfiy966_3R0rPMyLz3I49uAcVy2pi6uazg" target="_blank" class="btn-sm bg-gray-300">view site</a>
           </div>
       </div>
       


     
       
   </div>
</div>
@endsection