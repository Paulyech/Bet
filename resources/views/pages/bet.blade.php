@extends('layouts.app')

@section('content')
<div class="" style="background-image: url('../images/background.jpg');min-height:100vh;background-repeat:no-repeat;background-size:cover;background-position:center">

    {{-- PAGE HEADER --}}
    <div class=" bg-gradient-to-r from-gray-300 via-gray-500 to-gray-700 flex flex-wrap justify-center items-center">
            <h1 class=" uppercase font-bold text-4xl mt-8">popular betting sites</h1>
            <p class="text-lg md:mx-36 pb-8">Searching for the best betting sites in the country?well well,you are in the right place at the right time.we are determined to provide you,our esteemed fan a summrry review of the best sites and of course later on you can choose one that satisfies your needs</p>
        
       
    </div>

    {{-- GRID --}}
   <div class="grid lg:grid-cols-3 gap-2  justify-items-center mt-8" >

    {{-- CARDS --}}

            {{-- CARD 0 --}}
        <div class="card ">
            <span class="card-header">sportpesa</span>
            <img src="../images/sportpesa.jpg" alt="" class="img-fluid" >
            <span class="span-text">Looking for the best sports betting around? Get all the best Sport Betting action right here. When it comes to great sporting action, your best bet to stop right here ...</span>


            {{-- POPUP --}}

            <button class="rounded capitalize cursor-pointer hover:text-red-400 " id="show-content">read more</button>
            <div class=" bg-opacity-50 absolute  inset-0  items-center hidden justify-center" id="overlay">
                <div class="bg-gray-600 bg-opacity-95 max-w-sm rounded shadow-xl h-full">
                <div class=" flex justify-between items-center">
                    <div class="flex">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                            
                        </svg>
                        <h4 class="capitalize font-bold">liverpool</h4>
                    </div>
                    
                    

                    <svg class="h-5 w-5 cursor-pointer hover:bg-gray-400 rounded" id="close-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                    
                </div>
                <div class="font-semibold">
                    <ol class="ml-2" type="1">
                        <h1 class="font-bold">Pros</h1>
                        <li>Great football betting site for beginners</li>
                        <li>International betting site with a Kenyan feel</li>
                        <li>Easy deposits and fast withdrawals for Kenyan players</li>
                    </ol>
                    <br>
                    <ol class="ml-2">
                        <h1 class="font-bold">Cons</h1>
                        <li>E-sports section can be better</li>
                        <li>Limited online casino options</li>
                    </ol>    
  
                    
                </div>
               
            </div> 
            </div>
            {{-- POPUP END --}}               
            <div class="card-link ">
                <a href="https://www.ke.sportpesa.com/sports?sportId=1&section=highlights" target="_blank"   class="btn-sm bg-gray-300">view site</a>
            </div>
        </div>


            {{-- CARD 1 --}}
       <div class="card ">
           <span class="card-header ">betway</span>
           <img src="../images/betway.jpg" alt="image/sportpesa" class="img-fluid">
           <span class="span-text">Betway is an international betting site with high standards and a dedication to providing a smooth and elegant betting experience to players around the world. Recently, Betway has started expanding into the growing African betting market.</span>

            {{-- POPUP --}}

            <button class="rounded capitalize cursor-pointer hover:text-red-400 " id="show-content1">read more</button>
            <div class="bg-red-300 bg-opacity-50 absolute  inset-0  items-center hidden justify-center" id="overlay1">
                <div class="bg-gray-600 bg-opacity-95 max-w-sm rounded shadow-xl h-full">
                <div class=" flex justify-between items-center">
                    <div class="flex">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                            
                        </svg>
                        <h4 class="capitalize font-bold">malta</h4>
                    </div>
                    
                    

                    <svg class="h-5 w-5 cursor-pointer hover:bg-gray-400 rounded" id="close-btn1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                    
                </div>
                <div class="font-semibold ml-2">
                    <ol>
                        <h1 class="font-bold">Pros</h1>
                        <li>Very user-friendly. Great for beginners!</li>
                        <li>Deposit easily using Mpesa or Airtel Money</li>
                        <li>Enjoy a great selection of football odds, including Kenyan Premier League</li>
                    </ol>
                    <br>
                    <ol>
                        <h1 class="font-bold">Cons</h1>
                        <li>Customer service can be hard to contact</li>
                        <li>No online casino games or poker available</li>
                    </ol>
                        
                  
                </div>
               
            </div> 
            </div>
            {{-- POPUP END --}}             
           <div class="card-link ">
               <a href="https://www.betway.co.ke/" target="_blank"  class="btn-sm bg-gray-300">view site</a>
           </div>
       </div>


            {{-- CARD 2 --}}
       <div class="card">
           <span class="card-header">betika</span>
           <img src="../images/betika.jpg" alt="" class="img-fluid">
           <span class="span-text">Betika is a sports betting platform with operations in Nairobi, Kenya. </span>

            {{-- POPUP --}}

            <button class="rounded capitalize cursor-pointer hover:text-red-400 " id="show-content2">read more</button>
            <div class="bg-red-300 bg-opacity-50 absolute  inset-0  items-center hidden justify-center" id="overlay2">
                <div class="bg-gray-600 bg-opacity-95 max-w-sm rounded shadow-xl h-full">
                <div class=" flex justify-between items-center">
                    <div class="flex">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                            
                        </svg>
                        <h4 class="capitalize font-bold">kenya</h4>
                    </div>
                    
                    

                    <svg class="h-5 w-5 cursor-pointer hover:bg-gray-400 rounded" id="close-btn2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                    
                </div>
                <div class="font-semibold ml-2">
                    <ol>
                        <h1 class="font-bold">Pros</h1>
                        <li>Football betting site with great betting option</li>
                        <li>Highly competitive football betting odds</li>
                        <li>Accept deposits via M-Pesa</li>
                    </ol>
                    <br>
                    <ol>
                        <h1 class="font-bold">Cons</h1>
                        <li>Site can appeared too cluttered and busy</li>
                        <li>Need to work on live streaming</li>
                    </ol>
                  
                </div>
                
            </div> 
            </div>
            {{-- POPUP END --}}             
           <div class="card-link ">
                 <a href="https://www.betika.com/"  target="_blank"  class="btn-sm bg-gray-300" >view site</a>
           </div>
       </div>




            {{-- CARD 3 --}}
       <div class="card">
           <span class="card-header">odibets</span>
           <img src="../images/odibets.jpg" alt="" class="img-fluid">
           <span class="span-text">The best betting site in kenya!!most games on live betting.The fastest live betting guaranteed free bet ..</span>

            {{-- POPUP --}}

            <button class="rounded capitalize cursor-pointer hover:text-red-400 " id="show-content3">read more</button>
            <div class="bg-red-300 bg-opacity-50 absolute  inset-0  items-center hidden justify-center" id="overlay3">
                <div class="bg-gray-600 bg-opacity-95 max-w-sm rounded shadow-xl h-full">
                <div class=" flex justify-between items-center">
                    <div class="flex">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                            
                        </svg>
                        <h4 class="capitalize font-bold">kenya</h4>
                    </div>
                    
                    

                    <svg class="h-5 w-5 cursor-pointer hover:bg-gray-400 rounded" id="close-btn3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                    
                </div>
                <div class="font-semibold ml-2">
                   <ol>
                       <h1 class="font-bold">Pros</h1>
                       <li>Football betting site with great betting option</li>
                       <li>Highly competitive football betting odds</li>
                       <li>Accept deposits via M-Pesa</li>
                   </ol>
                   <br>
                   <ol>
                    <h1 class="font-bold">Cons</h1>

                       <li>Site can appeared too cluttered and busy</li>
                       <li>Need to work on live streaming</li>
                   </ol>
                        
                        
                  
                </div>
                
            </div> 
            </div>
            {{-- POPUP END --}}             
           <div class="card-link ">
                 <a href="https://odibets.com/" target="_blank" class="btn-sm bg-gray-300">view site</a>
           </div>
       </div>



            {{-- CARD 4 --}}
       <div class="card">
           <span class="card-header">22bet</span>
           <img src="../images/22bet.png" alt="" class="img-fluid">
           <span class="span-text">If you’re looking for a betting site in Kenya, then you need to take a look at 22Bet.

            22Bet is an international betting site with a focus on football betting. 22Bet is licensed in Kenya and they accept Kenyan players with a smile.</span>

            {{-- POPUP --}}

            <button class="rounded capitalize cursor-pointer hover:text-red-400 " id="show-content4">read more</button>
            <div class="bg-red-300 bg-opacity-50 absolute  inset-0  items-center hidden justify-center" id="overlay4">
                <div class="bg-gray-600 bg-opacity-95 max-w-sm rounded shadow-xl h-full">
                <div class=" flex justify-between items-center">
                    <div class="flex">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                            
                        </svg>
                        <h4 class="capitalize font-bold">cyprus</h4>
                    </div>
                    
                    

                    <svg class="h-5 w-5 cursor-pointer hover:bg-gray-400 rounded" id="close-btn4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                    
                </div>
                <div class="font-semibold ml-2">
                    <ol>
                        <h1 class="font-bold">Pros</h1>
                        <li> Great sports betting site with strong focus on football</li>
                        <li>Large selection of live betting options</li>
                        <li> Deposit via Mpesa or Airtel Money</li>
                    </ol>
                    <br>
                    <ol>
                        <h1 class="font-bold">Cons</h1>
                        <li>Betting site is a bit old and sometimes slow to load</li>
                        <li>Customer support is inefficient</li>
                    </ol>
          
                </div>
                
            </div> 
            </div>
            {{-- POPUP END --}}             
           <div class="card-link ">
                <a href="https://m.22bet.co.ke/"  target="_blank" class="btn-sm bg-gray-300">view site</a>
           </div>
       </div>



            {{-- CARD 5 --}}
       <div class="card">
           <span class="card-header"> bet365</span>
           <img src="../images/bet365.jpg" alt="" class="img-fluid">
           <span class="span-text">Bet365 is hands down one of the best bookmakers in the world. They have millions of customers worldwide and are active in so many different countries. </span>

            {{-- POPUP --}}

            <button class="rounded capitalize cursor-pointer hover:text-red-400 " id="show-content5">read more</button>
            <div class="bg-red-300 bg-opacity-50 absolute  inset-0  items-center hidden justify-center" id="overlay5">
                <div class="bg-gray-600 bg-opacity-95 max-w-sm rounded shadow-xl h-full">
                <div class=" flex justify-between items-center">
                    <div class="flex">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                            
                        </svg>
                        <h4 class="capitalize font-bold">united kingdom</h4>
                    </div>
                    
                    

                    <svg class="h-5 w-5 cursor-pointer hover:bg-gray-400 rounded" id="close-btn5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                    
                </div>
                <div class="font-semibold ml-2">
                    <ol>
                        <h1 class="font-bold">Pros</h1>
                        <li>One of the biggest sports betting portfolios in the world</li>
                        <li>Neat and convenient betting platform that's easy to use</li>
                        <li>Offers FREE live-streaming to all active players</li>
                    </ol>
                    <br>
                    <ol>
                        <h1 class="font-bold">Cons</h1>
                        <li>Does NOT accept deposits via Mpesa or Airtel Money</li>
                        <li> Does NOT accept deposits using Kenyan shillings</li>
                    </ol>
                        
    
                </div>
                
            </div> 
            </div>
            {{-- POPUP END --}}             
           <div class="card-link ">
                <a href="https://www.bet365.com/#/HO/" target="_blank" class="btn-sm bg-gray-300">view site</a>
           </div>
       </div>



            {{-- CARD 6 --}}
       <div class="card">
           <span class="card-header">betyetu</span>
           <img src="../images/betyetu.jpg" alt="" class="img-fluid">
           <span class="span-text">Betyetu is a reliable bookmaker, and cooperating with it you can count on a really big winnings. This company offers its customers to turn their knowledge of sports into a noticeable profit. The team of professionals offers a really wide line of events, among which it will be easy to find exactly the confrontations that are most interesting for you..</span>

            {{-- POPUP --}}

            <button class="rounded capitalize cursor-pointer hover:text-red-400 " id="show-content6">read more</button>
            <div class="bg-red-300 bg-opacity-50 absolute  inset-0  items-center hidden justify-center" id="overlay6">
                <div class="bg-gray-600 bg-opacity-95 max-w-sm rounded shadow-xl h-full">
                <div class=" flex justify-between items-center">
                    <div class="flex">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                            
                        </svg>
                        <h4 class="capitalize font-bold">UK</h4>
                    </div>
                    
                    

                    <svg class="h-5 w-5 cursor-pointer hover:bg-gray-400 rounded" id="close-btn6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                    
                </div>
                <div class="font-semibold ml-2">
                    <ol>
                        <h1 class="font-bold">Pros</h1>
                        <li>Great site for football live betting</li>
                        <li>One of the best online betting apps in Kenya</li>
                        <li>Nice welcome bonus for new players</li>
                    </ol>
                    <br>
                    <ol>
                        <h1 class="font-bold">Cons</h1>
                        <li>Need to work on live streaming service</li>
                        <li>  Cash out offers not the most generous</li>
                    </ol>
                        
  
                </div>
                
            </div> 
            </div>
            {{-- POPUP END --}}             
           <div class="card-link ">
                <a href="https://betyetu.com.gh/" target="_blank" class="btn-sm bg-gray-300">view site</a>
           </div>
       </div>



            {{-- CARD 7 --}}
       <div class="card">
           <span class="card-header">dafabet</span>
           <img src="../images/dafabet.jpg" alt="" class="img-fluid">
           <span class="span-text"> Dafabet Kenya is a major online gambling site that offers online sports betting and online casino gaming services in the Kenyan market</span>

            {{-- POPUP --}}

            <button class="rounded capitalize cursor-pointer hover:text-red-400 " id="show-content7">read more</button>
            <div class="bg-red-300 bg-opacity-50 absolute  inset-0  items-center hidden justify-center" id="overlay7">
                <div class="bg-gray-600 bg-opacity-95 max-w-sm rounded shadow-xl h-full">
                <div class=" flex justify-between items-center">
                    <div class="flex">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                            
                        </svg>
                        <h4 class="capitalize font-bold">phillipines</h4>
                    </div>
                    
                    

                    <svg class="h-5 w-5 cursor-pointer hover:bg-gray-400 rounded" id="close-btn7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                    
                </div>
                <div class="font-semibold ml-2">
                    <ol>
                        <h1 class="font-bold">Pros</h1>
                        <li>High odds for every match available on a daily basis</li>
                        <li>Daily jackpot</li>
                        <li>Affordable jackpot amount to bet on</li>
                        <li>Cash out</li>
                        <li>Live betting</li>
                    </ol>
                     <br>
                     <ol>
                         <h1 class="font-bold">Cons</h1>
                         <li>Poor mobile betting experience</li>
                     </ol>  

                </div>
               
            </div> 
            </div>
            {{-- POPUP END --}}             
           <div class="card-link ">
                <a href="https://www.dafabet.co.ke/ke/sports" target="_blank" class="btn-sm bg-gray-300">view site</a>
           </div>
       </div>


            {{-- CARD 8 --}}
       <div class="card">
           <span class="card-header">sportybet</span>
           <img src="../images/sportybet.png" alt="" class="img-fluid">
           <span class="span-text">SportyBet offers the best odds, a lite APP with the fastest live betting experience, instant deposits and withdrawals, and great bonuses.</span>


            {{-- POPUP --}}

            <button class="rounded capitalize cursor-pointer hover:text-red-400 " id="show-content8">read more</button>
            <div class="bg-red-300 bg-opacity-50 absolute  inset-0  items-center hidden justify-center" id="overlay8">
                <div class="bg-gray-600 bg-opacity-95 max-w-sm rounded shadow-xl h-full">
                <div class=" flex justify-between items-center">
                    <div class="flex">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                            
                        </svg>
                        <h4 class="capitalize font-bold">kenya</h4>
                    </div>
                    
                    

                    <svg class="h-5 w-5 cursor-pointer hover:bg-gray-400 rounded" id="close-btn8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                    
                </div>
                <div class="font-semibold ml-2">
                   <ol>
                        <h1 class="font-bold">Pros</h1>
                        <li>Fast Website</li>
                        <li>Easy jackpot</li>
                        <li>Full and partial cashout</li>
                   </ol>
                                            
                    <h1 class="font-bold">Sign up bonus</h1> 

                       <p> The bookmaker will give you a deposit bonus for all first deposits of minimum Ksh.50. To get this bonus Make a first deposit of KES 50/100/200/300, and you get gifts in total value of KES 150/300/600/1000.

                        Gifts can only be used for “Sports” Betting and only one gift can be used in a betslip. Placed bets must have Selections with Odds > 3.15. 

                    </p>
                </div>
                
            </div> 
            </div>
            {{-- POPUP END --}}             
           <div class="card-link ">
                <a href="https://www.sportybet.com/ke/" target="_blank" class="btn-sm bg-gray-300">view site</a>
           </div>
       </div>
       


            {{-- CARD 9 --}}
       <div class="card">
           <span class="card-header">bet winner</span>
           <img src="../images/betwinner.jpg" alt="" class="img-fluid">
           <span class="span-text">Betwinner is an international bookmaker and gambling site that provides an abundance of betting options and games to players all over the world</span>

            {{-- POPUP --}}

            <button class="rounded capitalize cursor-pointer hover:text-red-400 " id="show-content9">read more</button>
            <div class="bg-red-300 bg-opacity-50 absolute  inset-0  items-center hidden justify-center" id="overlay9">
                <div class="bg-gray-600 bg-opacity-95 max-w-sm rounded shadow-xl h-full">
                <div class=" flex justify-between items-center">
                    <div class="flex">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                            
                        </svg>
                        <h4 class="capitalize font-bold">cyprus</h4>
                    </div>
                    
                    

                    <svg class="h-5 w-5 cursor-pointer hover:bg-gray-400 rounded" id="close-btn9" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                    
                </div>
                <div class="font-semibold ml-2">
                    <ol>
                        <h1 class="font-bold">Pros</h1>
                        <li> Has a nice collection of European sports such as football, cricket, rugby and more</li>
                        <li>Provides great odds on football which increases player profits</li>
                        <li>Accepts deposits via Mpesa which is helpful for Kenyan players</li>

                    </ol>
                      <br> 
                    <ol>
                        <h1 class="font-bold">Cons</h1>
                        <li> Betting site contains many games and sometimes appears cluttered</li>
                        <li>Withdrawal times are long according to some players</li>

                    </ol>
                       
                        
                </div>
                
            </div> 
            </div>
            {{-- POPUP END --}}              
           <div class="card-link ">
                <a href="https://m.betwinner.ke/line/top" target="_blank" class="btn-sm bg-gray-300">view site</a>
           </div>
       </div>



            {{-- CARD 10 --}}
       <div class="card">
           <span class="card-header">melbet</span>
           <img src="../images/melbet.jpg" alt="" class="img-fluid">
           <span class="span-text">Melbet is a relatively new betting site in Kenya, but the bookie is already one of the most used betting sites in Kenya.</span>
                {{-- POPUP --}}

                <button class="rounded capitalize cursor-pointer hover:text-red-400 " id="show-content10">read more</button>
               <div class="bg-red-300 bg-opacity-50 absolute  inset-0  items-center hidden justify-center" id="overlay10">
                   <div class="bg-gray-600 bg-opacity-95 max-w-sm rounded shadow-xl h-full">
                    <div class=" flex justify-between items-center">
                        <div class="flex">
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                                
                              </svg>
                              <h4 class="capitalize font-bold">cyprus</h4>
                        </div>
                        
                          

                        <svg class="h-5 w-5 cursor-pointer hover:bg-gray-400 rounded" id="close-btn10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                          </svg>
                          
                    </div>
                    <div class="font-semibold ml-2">
                       <ol>
                           <h1 class="font-bold">Pros</h1>
                           <li>Football betting site with great bonuses and promotions</li>
                           <li> Loaded sportsbook with great football betting options</li>
                           <li> Easy deposits and fast withdrawals</li>
                       </ol>
                       <br>
                       <ol>
                           <h1 class="font-bold">Cons</h1>
                           <li> Customer support is a little slow to respond</li>
                           <li> Site can appear cluttered at times</li>
                       </ol>
    
                    </div>
                    
                </div> 
               </div>
               {{-- POPUP END --}}


           <div class="card-link ">
                <a href="https://melbet.ke/" target="_blank" class="btn-sm bg-gray-300">view site</a>
           </div>
       </div>



                {{-- CARD 11 --}}
       <div class="card">
           <span class="card-header">mcheza</span>
           <img src="../images/mcheza.png" alt="" class="img-fluid">
           <span class="span-text">Mcheza, like numerous other online gaming platforms, has become very popular in Kenya. Mcheza Kenya is well-known by sports lovers for its bonuses and jackpots. Mcheza users are allowed to place multiple bets on the different sports being played worldwide. Read more
        </span>


            {{-- POPUP --}}

            <button class="rounded capitalize cursor-pointer hover:text-red-400 " id="show-content11">read more</button>
            <div class="bg-red-300 bg-opacity-50 absolute  inset-0  items-center hidden justify-center" id="overlay11">
                <div class="bg-gray-600 bg-opacity-95 max-w-sm rounded shadow-xl h-full">
                <div class=" flex justify-between items-center">
                    <div class="flex">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                            
                        </svg>
                        <h4 class="capitalize font-bold">cyprus</h4>
                    </div>
                    
                    

                    <svg class="h-5 w-5 cursor-pointer hover:bg-gray-400 rounded" id="close-btn11" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                    
                </div>
                <div class="font-semibold ml-2">
                    <ol>
                        <h1 class="font-bold">Pros</h1>
                        <li>Football betting site with great bonuses and promotions</li>
                        <li> Loaded sportsbook with great football betting options</li>
                        <li> Easy deposits and fast withdrawals</li>
                    </ol>
                    <br>
                    <ol>
                        <h1 class="font-bold">Cons</h1>
                        <li> Customer support is a little slow to respond</li>
                        <li> Site can appear cluttered at times</li>
                    </ol>
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