@extends('layouts.app')

@section('content')
<div class="" style="background-image: url('../images/background2.jpg');min-height:100vh;background-repeat:no-repeat;background-size:cover;background-position:center">

    {{-- PAGE HEADER --}}
    <div class=" bg-gradient-to-r from-gray-300 via-gray-500 to-gray-700 flex flex-wrap justify-center items-center">
            <h1 class=" uppercase font-bold text-4xl pt-8">popular betting sites</h1>
            <p class="text-lg md:mx-36 pb-8">Searching for the best betting sites in the country?well well,you are in the right place at the right time.we are determined to provide you,our esteemed fan a summrry review of the best sites and of course later on you can choose one that satisfies your needs</p>
        
       
    </div>

    {{-- GRID --}}
   <div class="grid lg:grid-cols-3 gap-2  justify-items-center mt-8" >

    {{-- CARDS --}}

        <div class="card ">
            <span class="card-header">sportpesa</span>
            <img src="../images/sportpesa.jpg" alt="" class="img-fluid" >
            <span class="span-text">Looking for the best sports betting around? Get all the best Sport Betting action right here. When it comes to great sporting action, your best bet to stop right here ...</span>


            {{-- POPUP --}}

            <button class="rounded capitalize cursor-pointer hover:text-red-400 " id="show-content">read more</button>
            <div class="bg-red-300 bg-opacity-50 absolute  inset-0  items-center hidden justify-center" id="overlay">
                <div class="bg-gray-600 bg-opacity-95 max-w-sm rounded shadow-xl h-full">
                <div class=" flex justify-between items-center">
                    <div class="flex">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                            
                        </svg>
                        <h4 class="capitalize font-bold">liverpool</h4>
                    </div>
                    
                    

                    <svg class="h-5 w-5 cursor-pointer hover:bg-gray-600" id="close-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                    
                </div>
                <div class="font-semibold">
                    <p >
                        Great football betting site for beginners
                        International betting site with a Kenyan feel
                        Easy deposits and fast withdrawals for Kenyan players
                    
                        E-sports section can be better
                        Limited online casino options
                    </p>
                    <p class="pt-12"><span class="text-black font-bold">frequency:</span>8 free tips per day</p>
                </div>
                <div class="flex justify-self-auto items-baseline pt" id="cancel-btn">
                    <button class="bg-gray-200 rounded-sm hover:bg-gray-400">close </button>
                </div>
            </div> 
            </div>
            {{-- POPUP END --}}               
            <div class="card-link ">
                <a href="https://www.ke.sportpesa.com/sports?sportId=1&section=highlights" target="_blank"   class="btn-sm bg-gray-300">view site</a>
            </div>
        </div>



       <div class="card ">
           <span class="card-header ">betway</span>
           <img src="../images/betway.jpg" alt="image/sportpesa" class="img-fluid">
           <span class="span-text">Betway is an international betting site with high standards and a dedication to providing a smooth and elegant betting experience to players around the world. Recently, Betway has started expanding into the growing African betting market.</span>

            {{-- POPUP --}}

            <button class="rounded capitalize cursor-pointer hover:text-red-400 " id="show-content">read more</button>
            <div class="bg-red-300 bg-opacity-50 absolute  inset-0  items-center hidden justify-center" id="overlay">
                <div class="bg-gray-600 bg-opacity-95 max-w-sm rounded shadow-xl h-full">
                <div class=" flex justify-between items-center">
                    <div class="flex">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                            
                        </svg>
                        <h4 class="capitalize font-bold">malta</h4>
                    </div>
                    
                    

                    <svg class="h-5 w-5 cursor-pointer hover:bg-gray-600" id="close-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                    
                </div>
                <div class="font-semibold">
                    <p >
                        Great football betting site for beginners
                        International betting site with a Kenyan feel
                        Easy deposits and fast withdrawals for Kenyan players
                    
                        E-sports section can be better
                        Limited online casino options
                    </p>
                    <p class="pt-12"><span class="text-black font-bold">frequency:</span>8 free tips per day</p>
                </div>
                <div class="flex justify-self-auto items-baseline pt" id="cancel-btn">
                    <button class="bg-gray-200 rounded-sm hover:bg-gray-400">close </button>
                </div>
            </div> 
            </div>
            {{-- POPUP END --}}             
           <div class="card-link ">
               <a href="https://www.betway.co.ke/" target="_blank"  class="btn-sm bg-gray-300">view site</a>
           </div>
       </div>


       
       <div class="card">
           <span class="card-header">betika</span>
           <img src="../images/betika.jpg" alt="" class="img-fluid">
           <span class="span-text">Betika is a sports betting platform with operations in Nairobi, Kenya. </span>

            {{-- POPUP --}}

            <button class="rounded capitalize cursor-pointer hover:text-red-400 " id="show-content">read more</button>
            <div class="bg-red-300 bg-opacity-50 absolute  inset-0  items-center hidden justify-center" id="overlay">
                <div class="bg-gray-600 bg-opacity-95 max-w-sm rounded shadow-xl h-full">
                <div class=" flex justify-between items-center">
                    <div class="flex">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                            
                        </svg>
                        <h4 class="capitalize font-bold">kenya</h4>
                    </div>
                    
                    

                    <svg class="h-5 w-5 cursor-pointer hover:bg-gray-600" id="close-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                    
                </div>
                <div class="font-semibold">
                    <p >
                        Football betting site with great betting option
                        Highly competitive football betting odds
                        Accept deposits via M-Pesa
                    
                        Site can appeared too cluttered and busy
                        Need to work on live streaming
                    </p>
                    <p class="pt-12"><span class="text-black font-bold">frequency:</span>8 free tips per day</p>
                </div>
                <div class="flex justify-self-auto items-baseline pt" id="cancel-btn">
                    <button class="bg-gray-200 rounded-sm hover:bg-gray-400">close </button>
                </div>
            </div> 
            </div>
            {{-- POPUP END --}}             
           <div class="card-link ">
                 <a href="https://www.betika.com/"  target="_blank"  class="btn-sm bg-gray-300" >view site</a>
           </div>
       </div>


       <div class="card">
           <span class="card-header">odibets</span>
           <img src="../images/odibets.jpg" alt="" class="img-fluid">
           <span class="span-text">The best betting site in kenya!!most games on live betting.The fastest live betting guaranteed free bet ..</span>

            {{-- POPUP --}}

            <button class="rounded capitalize cursor-pointer hover:text-red-400 " id="show-content">read more</button>
            <div class="bg-red-300 bg-opacity-50 absolute  inset-0  items-center hidden justify-center" id="overlay">
                <div class="bg-gray-600 bg-opacity-95 max-w-sm rounded shadow-xl h-full">
                <div class=" flex justify-between items-center">
                    <div class="flex">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                            
                        </svg>
                        <h4 class="capitalize font-bold">kenya</h4>
                    </div>
                    
                    

                    <svg class="h-5 w-5 cursor-pointer hover:bg-gray-600" id="close-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                    
                </div>
                <div class="font-semibold">
                    <p >
                        Football betting site with great betting option
                        Highly competitive football betting odds
                        Accept deposits via M-Pesa
                    
                        Site can appeared too cluttered and busy
                        Need to work on live streaming
                    </p>
                    <p class="pt-12"><span class="text-black font-bold">frequency:</span>8 free tips per day</p>
                </div>
                <div class="flex justify-self-auto items-baseline pt" id="cancel-btn">
                    <button class="bg-gray-200 rounded-sm hover:bg-gray-400">close </button>
                </div>
            </div> 
            </div>
            {{-- POPUP END --}}             
           <div class="card-link ">
                 <a href="https://odibets.com/" target="_blank" class="btn-sm bg-gray-300">view site</a>
           </div>
       </div>


       <div class="card">
           <span class="card-header">22bet</span>
           <img src="../images/22bet.png" alt="" class="img-fluid">
           <span class="span-text">If you’re looking for a betting site in Kenya, then you need to take a look at 22Bet.

            22Bet is an international betting site with a focus on football betting. 22Bet is licensed in Kenya and they accept Kenyan players with a smile.</span>

            {{-- POPUP --}}

            <button class="rounded capitalize cursor-pointer hover:text-red-400 " id="show-content">read more</button>
            <div class="bg-red-300 bg-opacity-50 absolute  inset-0  items-center hidden justify-center" id="overlay">
                <div class="bg-gray-600 bg-opacity-95 max-w-sm rounded shadow-xl h-full">
                <div class=" flex justify-between items-center">
                    <div class="flex">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                            
                        </svg>
                        <h4 class="capitalize font-bold">cyprus</h4>
                    </div>
                    
                    

                    <svg class="h-5 w-5 cursor-pointer hover:bg-gray-600" id="close-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                    
                </div>
                <div class="font-semibold">
                    <p >
                        Football betting site with great betting option
                        Highly competitive football betting odds
                        Accept deposits via M-Pesa
                    
                        Site can appeared too cluttered and busy
                        Need to work on live streaming
                    </p>
                    <p class="pt-12"><span class="text-black font-bold">frequency:</span>8 free tips per day</p>
                </div>
                <div class="flex justify-self-auto items-baseline pt" id="cancel-btn">
                    <button class="bg-gray-200 rounded-sm hover:bg-gray-400">close </button>
                </div>
            </div> 
            </div>
            {{-- POPUP END --}}             
           <div class="card-link ">
                <a href="https://m.22bet.co.ke/"  target="_blank" class="btn-sm bg-gray-300">view site</a>
           </div>
       </div>


       <div class="card">
           <span class="card-header"> bet365</span>
           <img src="../images/bet365.png" alt="" class="img-fluid">
           <span class="span-text">Bet365 is hands down one of the best bookmakers in the world. They have millions of customers worldwide and are active in so many different countries. </span>

            {{-- POPUP --}}

            <button class="rounded capitalize cursor-pointer hover:text-red-400 " id="show-content">read more</button>
            <div class="bg-red-300 bg-opacity-50 absolute  inset-0  items-center hidden justify-center" id="overlay">
                <div class="bg-gray-600 bg-opacity-95 max-w-sm rounded shadow-xl h-full">
                <div class=" flex justify-between items-center">
                    <div class="flex">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                            
                        </svg>
                        <h4 class="capitalize font-bold">united kingdom</h4>
                    </div>
                    
                    

                    <svg class="h-5 w-5 cursor-pointer hover:bg-gray-600" id="close-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                    
                </div>
                <div class="font-semibold">
                    <p >
                        One of the biggest sports betting portfolios in the world
                        Neat and convenient betting platform that's easy to use
                        Offers FREE live-streaming to all active players
                    
                        Does NOT accept deposits via Mpesa or Airtel Money
                        Does NOT accept deposits using Kenyan shillings
                    </p>
                    <p class="pt-12"><span class="text-black font-bold">frequency:</span>8 free tips per day</p>
                </div>
                <div class="flex justify-self-auto items-baseline pt" id="cancel-btn">
                    <button class="bg-gray-200 rounded-sm hover:bg-gray-400">close </button>
                </div>
            </div> 
            </div>
            {{-- POPUP END --}}             
           <div class="card-link ">
                <a href="https://www.bet365.com/#/HO/" target="_blank" class="btn-sm bg-gray-300">view site</a>
           </div>
       </div>


       <div class="card">
           <span class="card-header">betyetu</span>
           <img src="../images/betyetu.jpg" alt="" class="img-fluid">
           <span class="span-text">Betyetu is a reliable bookmaker, and cooperating with it you can count on a really big winnings. This company offers its customers to turn their knowledge of sports into a noticeable profit. The team of professionals offers a really wide line of events, among which it will be easy to find exactly the confrontations that are most interesting for you..</span>

            {{-- POPUP --}}

            <button class="rounded capitalize cursor-pointer hover:text-red-400 " id="show-content">read more</button>
            <div class="bg-red-300 bg-opacity-50 absolute  inset-0  items-center hidden justify-center" id="overlay">
                <div class="bg-gray-600 bg-opacity-95 max-w-sm rounded shadow-xl h-full">
                <div class=" flex justify-between items-center">
                    <div class="flex">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                            
                        </svg>
                        <h4 class="capitalize font-bold">UK</h4>
                    </div>
                    
                    

                    <svg class="h-5 w-5 cursor-pointer hover:bg-gray-600" id="close-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                    
                </div>
                <div class="font-semibold">
                    <p >
                        Great site for football live betting
                        One of the best online betting apps in Kenya
                        Nice welcome bonus for new players
                    
                        Need to work on live streaming service
                        Cash out offers not the most generous
                    </p>
                    <p class="pt-12"><span class="text-black font-bold">frequency:</span>8 free tips per day</p>
                </div>
                <div class="flex justify-self-auto items-baseline pt" id="cancel-btn">
                    <button class="bg-gray-200 rounded-sm hover:bg-gray-400">close </button>
                </div>
            </div> 
            </div>
            {{-- POPUP END --}}             
           <div class="card-link ">
                <a href="https://betyetu.com.gh/" target="_blank" class="btn-sm bg-gray-300">view site</a>
           </div>
       </div>


       <div class="card">
           <span class="card-header">dafabet</span>
           <img src="../images/dafabet.jpg" alt="" class="img-fluid">
           <span class="span-text"> Dafabet Kenya is a major online gambling site that offers online sports betting and online casino gaming services in the Kenyan market</span>

            {{-- POPUP --}}

            <button class="rounded capitalize cursor-pointer hover:text-red-400 " id="show-content">read more</button>
            <div class="bg-red-300 bg-opacity-50 absolute  inset-0  items-center hidden justify-center" id="overlay">
                <div class="bg-gray-600 bg-opacity-95 max-w-sm rounded shadow-xl h-full">
                <div class=" flex justify-between items-center">
                    <div class="flex">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                            
                        </svg>
                        <h4 class="capitalize font-bold">phillipines</h4>
                    </div>
                    
                    

                    <svg class="h-5 w-5 cursor-pointer hover:bg-gray-600" id="close-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                    
                </div>
                <div class="font-semibold">
                    <p >
                        Great site for football live betting
                        One of the best online betting apps in Kenya
                        Nice welcome bonus for new players
                    
                        Need to work on live streaming service
                        Cash out offers not the most generous
                    </p>
                    <p class="pt-12"><span class="text-black font-bold">frequency:</span>8 free tips per day</p>
                </div>
                <div class="flex justify-self-auto items-baseline pt" id="cancel-btn">
                    <button class="bg-gray-200 rounded-sm hover:bg-gray-400">close </button>
                </div>
            </div> 
            </div>
            {{-- POPUP END --}}             
           <div class="card-link ">
                <a href="https://www.dafabet.co.ke/ke/sports" target="_blank" class="btn-sm bg-gray-300">view site</a>
           </div>
       </div>


       <div class="card">
           <span class="card-header">sportybet</span>
           <img src="../images/sportybet.png" alt="" class="img-fluid">
           <span class="span-text">SportyBet offers the best odds, a lite APP with the fastest live betting experience, instant deposits and withdrawals, and great bonuses.</span>


            {{-- POPUP --}}

            <button class="rounded capitalize cursor-pointer hover:text-red-400 " id="show-content">read more</button>
            <div class="bg-red-300 bg-opacity-50 absolute  inset-0  items-center hidden justify-center" id="overlay">
                <div class="bg-gray-600 bg-opacity-95 max-w-sm rounded shadow-xl h-full">
                <div class=" flex justify-between items-center">
                    <div class="flex">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                            
                        </svg>
                        <h4 class="capitalize font-bold">kenya</h4>
                    </div>
                    
                    

                    <svg class="h-5 w-5 cursor-pointer hover:bg-gray-600" id="close-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                    
                </div>
                <div class="font-semibold">
                    <p >
                        Great site for football live betting
                        One of the best online betting apps in Kenya
                        Nice welcome bonus for new players
                    
                        Need to work on live streaming service
                        Cash out offers not the most generous
                    </p>
                    <p class="pt-12"><span class="text-black font-bold">frequency:</span>8 free tips per day</p>
                </div>
                <div class="flex justify-self-auto items-baseline pt" id="cancel-btn">
                    <button class="bg-gray-200 rounded-sm hover:bg-gray-400">close </button>
                </div>
            </div> 
            </div>
            {{-- POPUP END --}}             
           <div class="card-link ">
                <a href="https://www.sportybet.com/ke/" target="_blank" class="btn-sm bg-gray-300">view site</a>
           </div>
       </div>
       


       <div class="card">
           <span class="card-header">bet winner</span>
           <img src="../images/betwinner.jpg" alt="" class="img-fluid">
           <span class="span-text">Betwinner is an international bookmaker and gambling site that provides an abundance of betting options and games to players all over the world</span>

            {{-- POPUP --}}

            <button class="rounded capitalize cursor-pointer hover:text-red-400 " id="show-content">read more</button>
            <div class="bg-red-300 bg-opacity-50 absolute  inset-0  items-center hidden justify-center" id="overlay">
                <div class="bg-gray-600 bg-opacity-95 max-w-sm rounded shadow-xl h-full">
                <div class=" flex justify-between items-center">
                    <div class="flex">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                            
                        </svg>
                        <h4 class="capitalize font-bold">cyprus</h4>
                    </div>
                    
                    

                    <svg class="h-5 w-5 cursor-pointer hover:bg-gray-600" id="close-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                    
                </div>
                <div class="font-semibold">
                    <p >
                        Great site for football live betting
                        One of the best online betting apps in Kenya
                        Nice welcome bonus for new players
                    
                        Need to work on live streaming service
                        Cash out offers not the most generous
                    </p>
                    <p class="pt-12"><span class="text-black font-bold">frequency:</span>8 free tips per day</p>
                </div>
                <div class="flex justify-self-auto items-baseline pt" id="cancel-btn">
                    <button class="bg-gray-200 rounded-sm hover:bg-gray-400">close </button>
                </div>
            </div> 
            </div>
            {{-- POPUP END --}}              
           <div class="card-link ">
                <a href="https://m.betwinner.ke/line/top" target="_blank" class="btn-sm bg-gray-300">view site</a>
           </div>
       </div>


       <div class="card">
           <span class="card-header">melbet</span>
           <img src="../images/melbet.jpg" alt="" class="img-fluid">
           <span class="span-text">Melbet is a relatively new betting site in Kenya, but the bookie is already one of the most used betting sites in Kenya.</span>
                {{-- POPUP --}}

                <button class="rounded capitalize cursor-pointer hover:text-red-400 " id="show-content">read more</button>
               <div class="bg-red-300 bg-opacity-50 absolute  inset-0  items-center hidden justify-center" id="overlay">
                   <div class="bg-gray-600 bg-opacity-95 max-w-sm rounded shadow-xl h-full">
                    <div class=" flex justify-between items-center">
                        <div class="flex">
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                                
                              </svg>
                              <h4 class="capitalize font-bold">cyprus</h4>
                        </div>
                        
                          

                        <svg class="h-5 w-5 cursor-pointer hover:bg-gray-600" id="close-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                          </svg>
                          
                    </div>
                    <div class="font-semibold">
                        <p >
                            Football betting site with great bonuses and promotions
                            Loaded sportsbook with great football betting options
                            Easy deposits and fast withdrawals
                        
                            Customer support is a little slow to respond
                            Site can appear cluttered at times
                        </p>
                        <p class="pt-12"><span class="text-black font-bold">frequency:</span>8 free tips per day</p>
                    </div>
                    <div class="flex justify-self-auto items-baseline pt" id="cancel-btn">
                        <button class="bg-gray-200 rounded-sm hover:bg-gray-400">close </button>
                    </div>
                </div> 
               </div>
               {{-- POPUP END --}}


           <div class="card-link ">
                <a href="https://melbet.ke/" target="_blank" class="btn-sm bg-gray-300">view site</a>
           </div>
       </div>


       <div class="card">
           <span class="card-header">mcheza</span>
           <img src="../images/mcheza.png" alt="" class="img-fluid">
           <span class="span-text">Mcheza, like numerous other online gaming platforms, has become very popular in Kenya. Mcheza Kenya is well-known by sports lovers for its bonuses and jackpots. Mcheza users are allowed to place multiple bets on the different sports being played worldwide. Read more
        </span>


            {{-- POPUP --}}

            <button class="rounded capitalize cursor-pointer hover:text-red-400 " id="show-content">read more</button>
            <div class="bg-red-300 bg-opacity-50 absolute  inset-0  items-center hidden justify-center" id="overlay">
                <div class="bg-gray-600 bg-opacity-95 max-w-sm rounded shadow-xl h-full">
                <div class=" flex justify-between items-center">
                    <div class="flex">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                            
                        </svg>
                        <h4 class="capitalize font-bold">cyprus</h4>
                    </div>
                    
                    

                    <svg class="h-5 w-5 cursor-pointer hover:bg-gray-600" id="close-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                    
                </div>
                <div class="font-semibold">
                    <p >
                        Football betting site with great bonuses and promotions
                        Loaded sportsbook with great football betting options
                        Easy deposits and fast withdrawals
                    
                        Customer support is a little slow to respond
                        Site can appear cluttered at times
                    </p>
                    <p class="pt-12"><span class="text-black font-bold">frequency:</span>8 free tips per day</p>
                </div>
                <div class="flex justify-self-auto items-baseline pt" id="cancel-btn">
                    <button class="bg-gray-200 rounded-sm hover:bg-gray-400">close </button>
                </div>
            </div> 
            </div>
            {{-- POPUP END --}}           
           <div class="card-link ">
                <a href="https://www.mcheza.co.ke/#/" target="_blank" class="btn-sm bg-gray-300">view site</a>
           </div>
       </div>
       
   </div>
</div>
@endsection