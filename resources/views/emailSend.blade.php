@extends('layouts.app')

@section('content')

    <div class="section-title pt-8">
        <h4>talk to us</h4>
    </div>
    

    <div class="sm:flex sm:justify-center py-12 ">
        <div class="flex flex-wrap justify-center">
            
                @if (count($errors) > 0)
                <div class="alert bg-red-400  flex justify-between items-center">
                    
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="btn-sm">
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                          </svg>
                    </button>
                </div>
                @endif
                @if ($message = Session::get('success'))
            <div class="alert bg-red-400  flex justify-between items-center">
                <strong>{{ $message }}</strong>
                <button type="btn-sm">
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                      </svg>
                </button>
                
            </div>
            @endif
        
            <form action="{{url('sendemail/send')}}" method="POST" class=" form-group ">
                {{ csrf_field() }}
                <div class="mb-4 capitalize">
                    <label for="name">name</label>
                    <input type="text" name="name" placeholder="enter your name" class="form-control ">
                </div >
                <div class="mb-4 capitalize">
                    <label for="email">email</label>
                    <input type="text" name="email" placeholder="enter your email" class="form-control">
                </div>
                <div class="mb-4 capitalize">
                    <label for="message">message</label>
                    <textarea name="message" id="" cols="30" rows="10" class="form-textarea w-full"></textarea>
                </div>
                <input type="submit" name="send" value="Send" class="btn-lg bg-green-400 hover:bg-gray-300">
            </form>
        </div>

        <div class="pl-12 ">
            <div>
                <svg class="w-5 inline-block"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                  </svg>

                <a href="#" class=" text-white ">paulyech96@gmail.com</a>
            </div>
            <div class="mt-10"> 
                
                    <svg class="w-5 inline-block" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor ">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2M5 3a2 2 0 00-2 2v1c0 8.284 6.716 15 15 15h1a2 2 0 002-2v-3.28a1 1 0 00-.684-.948l-4.493-1.498a1 1 0 00-1.21.502l-1.13 2.257a11.042 11.042 0 01-5.516-5.517l2.257-1.128a1 1 0 00.502-1.21L9.228 3.683A1 1 0 008.279 3H5z" />
                      </svg>
                
                <a href="#" class=" text-white ">+254 715 474 420</a>
            </div>
            <div class="mt-10">
                <svg  class="w-5 inline-block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                  </svg>
                <a  href="#" class="text-white capitalize " >nairobi, kenya</a>
            </div>
        </div>
           
        </div>
        

@endsection

