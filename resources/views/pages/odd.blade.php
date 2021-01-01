@extends('layouts.app')

@section('content')
<div class="" style="background-image: url('../images/background5.jpg');background-size:cover;min-height:60vh;background-position:center;">
    



    <div class="flex justify-center items-center pt-20  " >
         <table class="border-collapse border-gray-200 border capitalize w-full md:w-3/5 table-fixed sm:h-3/5 ">
            <tr class="text-xl">
                <th class="border border-gray-600">time</th>
                <th class="border border-gray-600" >league</th>
                <th class="border border-gray-600">match</th>
                <th  class="border border-gray-600">prediction</th>
            </tr>
            <tr id="row-td" class="font-semibold">
                <td class="border border-gray-600" >1900hrs</td>
                <td  class="border border-gray-600">la liga</td>
                <td  class="border border-gray-600">barca vs eibar</td>
                <td  class="border border-gray-600">1</td>
            </tr>
            <tr id="row-td">
                <td class="border border-gray-600" >1900hrs</td>
                <td  class="border border-gray-600">la liga</td>
                <td  class="border border-gray-600">barca vs eibar</td>
                <td  class="border border-gray-600">1</td>
            </tr>
            <tr id="row-td">
                <td class="border border-gray-600" >1900hrs</td>
                <td  class="border border-gray-600">la liga</td>
                <td  class="border border-gray-600">barca vs eibar</td>
                <td  class="border border-gray-600">1</td>
            </tr>
            <tr id="row-td">
                <td class="border border-gray-600" >1900hrs</td>
                <td  class="border border-gray-600">la liga</td>
                <td  class="border border-gray-600">barca vs eibar</td>
                <td  class="border border-gray-600">1</td>
            </tr>
            <tr id="row-td">
                <td class="border border-gray-600" >1900hrs</td>
                <td  class="border border-gray-600">la liga</td>
                <td  class="border border-gray-600">barca vs eibar</td>
                <td  class="border border-gray-600">1</td>
            </tr>
            
         </table>
     </div>
    </div>
    <div class="bg-gradient-to-r from-gray-700 via-gray-800 to-black h-52  flex justify-center items-center">
        
        <form action="post" class="w-96 justify-center"> 
            <div class="flex justify-center mb-4">
                <h1 class="text-lg">Subscribe to get our newsletter</h1>
            </div>
            <input type="text" placeholder="Enter Your Email" class="form-control text-gray-900">
            <input type="submit" value="subscribe" class="btn-lg bg-gray-700">
        </form>
    </div>
</div>
@endsection