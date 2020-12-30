@extends('layouts.app')

@section('content')
    <div class="" style="background-image: url('../images/background2.jpg');min-height:100vh;background-repeat:no-repeat;background-size:cover;background-position:center">

        {{-- PAGE HEADER --}}
        <div class=" bg-gradient-to-r from-gray-300 via-gray-500 to-gray-700 flex flex-wrap justify-center items-center">
            <h1 class=" uppercase font-bold text-4xl pt-8">popular prediction sites</h1>
            <p class="text-lg md:mx-36 pb-8">Perhaps you might be in need of guidance before placing a bet,we got you covered pal.We provide a shortcut to the best prediction sites,tested an dproven</p>
        
       
        </div>

        {{-- GRID --}}
       <div class="grid lg:grid-cols-3 gap-2  justify-items-center mt-8" >

        {{-- CARDS --}}

            <div class="card h-full">
                <span class="card-header">betensured</span>
                <img src="../images/betensured.jpg" alt="" class="img-fluid" >
                <span class="span-text">Betensured is a top football prediction website that guarantees real football predictions on every market available. Every day of the week, our team of expert analysts and statisticians are working tirelessly to guarantee our daily returns on their stake.</span>
          
                {{-- POPUP --}}

                <button class="rounded capitalize cursor-pointer hover:text-red-400 " id="show-content">read more</button>
               <div class="bg-red-300 bg-opacity-50 absolute  inset-0  items-center hidden justify-center" id="overlay">
                   <div class="bg-gray-600 bg-opacity-95 max-w-sm rounded shadow-xl h-full">
                    <div class=" flex justify-between items-center">
                        <div class="flex">
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                                
                              </svg>
                              <h4 class="capitalize font-bold">south africa</h4>
                        </div>
                        
                          

                        <svg class="h-5 w-5 cursor-pointer hover:bg-gray-600" id="close-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                          </svg>
                          
                    </div>
                    <div class="font-semibold">
                        <p >
                            Betensured is one of the biggest operating football prediction website. It is the best source of well researched football statistics, analysis and predictions, sure 2 odds, sure 3 odds, football prediction site. They offer accurate predictions to enable their subscribers make substantial profit.There is a huge team behind the operations of this site, and there are hundreds if not thousands of football punters who come to this site on a daily basis in search of free tips. 
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
                    <a href="https://www.betensured.com/" target="_blank"   class="btn-sm bg-gray-300">view site</a>
                </div>

                
            </div>
           
           

           <div class="card ">
               <span class="card-header ">adibet</span>
               <img src="../images/adibet.jpg" alt="image/sportpesa" class="img-fluid">
               <span class="span-text">Every day, Adibet football experts offer their personal forecasts for various markets and leagues, all of which are fully reflected and updated in real-time according to live events Read more.
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
                              <h4 class="capitalize font-bold">south africa</h4>
                        </div>
                        
                          

                        <svg class="h-5 w-5 cursor-pointer hover:bg-gray-600" id="close-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                          </svg>
                          
                    </div>
                    <div class="font-semibold">
                        <p >
                            Betensured is one of the biggest operating football prediction website. It is the best source of well researched football statistics, analysis and predictions, sure 2 odds, sure 3 odds, football prediction site. They offer accurate predictions to enable their subscribers make substantial profit.There is a huge team behind the operations of this site, and there are hundreds if not thousands of football punters who come to this site on a daily basis in search of free tips. 
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
                   <a href="https://www.adibet.com/" target="_blank"  class="btn-sm bg-gray-300">view site</a>
               </div>
           </div>
          


           
           <div class="card">
               <span class="card-header">freesupertips</span>
               <img src="../images/freesuper.png" alt="" class="img-fluid">
               <span class="span-text">Free Super Tips is the home of free sports betting tips. Get free tips from professional betting tipsters across all sports and offers from leading bookies!</span>

                {{-- POPUP --}}

                <button class="rounded capitalize cursor-pointer hover:text-red-400 " id="show-content">read more</button>
               <div class="bg-red-300 bg-opacity-50 absolute  inset-0  items-center hidden justify-center" id="overlay">
                   <div class="bg-gray-600 bg-opacity-95 max-w-sm rounded shadow-xl h-full">
                    <div class=" flex justify-between items-center">
                        <div class="flex">
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                                
                              </svg>
                              <h4 class="capitalize font-bold">south africa</h4>
                        </div>
                        
                          

                        <svg class="h-5 w-5 cursor-pointer hover:bg-gray-600" id="close-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                          </svg>
                          
                    </div>
                    <div class="font-semibold">
                        <p >
                            Betensured is one of the biggest operating football prediction website. It is the best source of well researched football statistics, analysis and predictions, sure 2 odds, sure 3 odds, football prediction site. They offer accurate predictions to enable their subscribers make substantial profit.There is a huge team behind the operations of this site, and there are hundreds if not thousands of football punters who come to this site on a daily basis in search of free tips. 
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
                     <a href="https://www.freesupertips.com/"  target="_blank"  class="btn-sm bg-gray-300" >view site</a>
               </div>
           </div>


           <div class="card">
               <span class="card-header">solopredict.com</span>
               <img src="../images/solopredict.png" alt="" class="img-fluid">
               <span class="span-text">If you are looking for site that predict football matches correctly, Betsloaded is the best football prediction site, You can win more than you lose by following the</span>


                {{-- POPUP --}}

                <button class="rounded capitalize cursor-pointer hover:text-red-400 " id="show-content">read more</button>
               <div class="bg-red-300 bg-opacity-50 absolute  inset-0  items-center hidden justify-center" id="overlay">
                   <div class="bg-gray-600 bg-opacity-95 max-w-sm rounded shadow-xl h-full">
                    <div class=" flex justify-between items-center">
                        <div class="flex">
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                                
                              </svg>
                              <h4 class="capitalize font-bold">south africa</h4>
                        </div>
                        
                          

                        <svg class="h-5 w-5 cursor-pointer hover:bg-gray-600" id="close-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                          </svg>
                          
                    </div>
                    <div class="font-semibold">
                        <p >
                            Betensured is one of the biggest operating football prediction website. It is the best source of well researched football statistics, analysis and predictions, sure 2 odds, sure 3 odds, football prediction site. They offer accurate predictions to enable their subscribers make substantial profit.There is a huge team behind the operations of this site, and there are hundreds if not thousands of football punters who come to this site on a daily basis in search of free tips. 
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
                     <a href="https://www.solopredict.com/" target="_blank" class="btn-sm bg-gray-300">view site</a>
               </div>
           </div>




           <div class="card">
               <span class="card-header">Betzodiac</span>
               <img src="../images/betzodiac.png" alt="" class="img-fluid">
               <span class="span-text">Betzodiac is the worlds leading Sport prediction website. We analyse our games with all the current stats, algorithms and events happening everyday in the world</span>


                {{-- POPUP --}}

                <button class="rounded capitalize cursor-pointer hover:text-red-400 " id="show-content">read more</button>
               <div class="bg-red-300 bg-opacity-50 absolute  inset-0  items-center hidden justify-center" id="overlay">
                   <div class="bg-gray-600 bg-opacity-95 max-w-sm rounded shadow-xl h-full">
                    <div class=" flex justify-between items-center">
                        <div class="flex">
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                                
                              </svg>
                              <h4 class="capitalize font-bold">south africa</h4>
                        </div>
                        
                          

                        <svg class="h-5 w-5 cursor-pointer hover:bg-gray-600" id="close-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                          </svg>
                          
                    </div>
                    <div class="font-semibold">
                        <p >
                            Betensured is one of the biggest operating football prediction website. It is the best source of well researched football statistics, analysis and predictions, sure 2 odds, sure 3 odds, football prediction site. They offer accurate predictions to enable their subscribers make substantial profit.There is a huge team behind the operations of this site, and there are hundreds if not thousands of football punters who come to this site on a daily basis in search of free tips. 
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
                    <a href="https://betzodiac.blogspot.com/"  target="_blank" class="btn-sm bg-gray-300">view site</a>
               </div>
           </div>


           <div class="card">
               <span class="card-header">Soccer Platform</span>
               <img src="../images/soccerplatform.png" alt="" class="img-fluid">
               <span class="span-text">soccer platform is the worlds leading Sport prediction website. We analyse our games with all the current stats, algorithms and events happening everyday in the </span>

                {{-- POPUP --}}

                <button class="rounded capitalize cursor-pointer hover:text-red-400 " id="show-content">read more</button>
               <div class="bg-red-300 bg-opacity-50 absolute  inset-0  items-center hidden justify-center" id="overlay">
                   <div class="bg-gray-600 bg-opacity-95 max-w-sm rounded shadow-xl h-full">
                    <div class=" flex justify-between items-center">
                        <div class="flex">
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                                
                              </svg>
                              <h4 class="capitalize font-bold">south africa</h4>
                        </div>
                        
                          

                        <svg class="h-5 w-5 cursor-pointer hover:bg-gray-600" id="close-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                          </svg>
                          
                    </div>
                    <div class="font-semibold">
                        <p >
                            Betensured is one of the biggest operating football prediction website. It is the best source of well researched football statistics, analysis and predictions, sure 2 odds, sure 3 odds, football prediction site. They offer accurate predictions to enable their subscribers make substantial profit.There is a huge team behind the operations of this site, and there are hundreds if not thousands of football punters who come to this site on a daily basis in search of free tips. 
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
                    <a href="https://soccerplatform.me/soccer-picks/" target="_blank" class="btn-sm bg-gray-300">view site</a>
               </div>
           </div>

           

           <div class="card">
               <span class="card-header">Matchplug</span>
               <img src="../images/matchplug.jpg" alt="" class="img-fluid">
               <span class="span-text">Matchplug is the best football prediction site connecting bettors with winning tips. We are spot on in our Soccer predictions, champions league </span>
                {{-- POPUP --}}

                <button class="rounded capitalize cursor-pointer hover:text-red-400 " id="show-content">read more</button>
               <div class="bg-red-300 bg-opacity-50 absolute  inset-0  items-center hidden justify-center" id="overlay">
                   <div class="bg-gray-600 bg-opacity-95 max-w-sm rounded shadow-xl h-full">
                    <div class=" flex justify-between items-center">
                        <div class="flex">
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                                
                              </svg>
                              <h4 class="capitalize font-bold">south africa</h4>
                        </div>
                        
                          

                        <svg class="h-5 w-5 cursor-pointer hover:bg-gray-600" id="close-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                          </svg>
                          
                    </div>
                    <div class="font-semibold">
                        <p >
                            Betensured is one of the biggest operating football prediction website. It is the best source of well researched football statistics, analysis and predictions, sure 2 odds, sure 3 odds, football prediction site. They offer accurate predictions to enable their subscribers make substantial profit.There is a huge team behind the operations of this site, and there are hundreds if not thousands of football punters who come to this site on a daily basis in search of free tips. 
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
                    <a href="https://matchplug.com/" target="_blank" class="btn-sm bg-gray-300">view site</a>
               </div>
           </div>


           <div class="card">
               <span class="card-header">1960tips</span>
               <img src="../images/1960tips.jpg" alt="" class="img-fluid">
               <span class="span-text">1960Tips is the best football prediction sites in the world with free soccer prediction, football betting tips, analysis on over and under 2.5, btts, .</span>

                {{-- POPUP --}}

                <button class="rounded capitalize cursor-pointer hover:text-red-400 " id="show-content">read more</button>
               <div class="bg-red-300 bg-opacity-50 absolute  inset-0  items-center hidden justify-center" id="overlay">
                   <div class="bg-gray-600 bg-opacity-95 max-w-sm rounded shadow-xl h-full">
                    <div class=" flex justify-between items-center">
                        <div class="flex">
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                                
                              </svg>
                              <h4 class="capitalize font-bold">south africa</h4>
                        </div>
                        
                          

                        <svg class="h-5 w-5 cursor-pointer hover:bg-gray-600" id="close-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                          </svg>
                          
                    </div>
                    <div class="font-semibold">
                        <p >
                            Betensured is one of the biggest operating football prediction website. It is the best source of well researched football statistics, analysis and predictions, sure 2 odds, sure 3 odds, football prediction site. They offer accurate predictions to enable their subscribers make substantial profit.There is a huge team behind the operations of this site, and there are hundreds if not thousands of football punters who come to this site on a daily basis in search of free tips. 
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
                    <a href="https://www.1960tips.com/" target="_blank" class="btn-sm bg-gray-300">view site</a>
               </div>
           </div>


           <div class="card">
               <span class="card-header">mightytips</span>
               <img src="../images/mightytips.jpg" alt="" class="img-fluid">
               <span class="span-text">Daily updated sports predictions, bookmaker rankings and top betting sites with bonuses for our readers. Helpful articles and tips for sports betting.</span>

                {{-- POPUP --}}

                <button class="rounded capitalize cursor-pointer hover:text-red-400 " id="show-content">read more</button>
               <div class="bg-red-300 bg-opacity-50 absolute  inset-0  items-center hidden justify-center" id="overlay">
                   <div class="bg-gray-600 bg-opacity-95 max-w-sm rounded shadow-xl h-full">
                    <div class=" flex justify-between items-center">
                        <div class="flex">
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                                
                              </svg>
                              <h4 class="capitalize font-bold">south africa</h4>
                        </div>
                        
                          

                        <svg class="h-5 w-5 cursor-pointer hover:bg-gray-600" id="close-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                          </svg>
                          
                    </div>
                    <div class="font-semibold">
                        <p >
                            Betensured is one of the biggest operating football prediction website. It is the best source of well researched football statistics, analysis and predictions, sure 2 odds, sure 3 odds, football prediction site. They offer accurate predictions to enable their subscribers make substantial profit.There is a huge team behind the operations of this site, and there are hundreds if not thousands of football punters who come to this site on a daily basis in search of free tips. 
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
                    <a href="https://www.mightytips.com/" target="_blank" class="btn-sm bg-gray-300">view site</a>
               </div>
           </div>
           
       </div>
    </div>
    
    
@endsection