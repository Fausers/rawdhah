<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



<x-app-layout>

   
    <x-slot name="header">
        <img style="height: 50px" src="{{url('/')}}/img/LOGO RAMIZ.png" alt="Trucking Transportation and Logistics HTML Template"/>

        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    

   

    <body>      

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Email</th>
                            <th>Loading Point</th>
                        
                            <th>Destination Zip</th>
                            <th>License Type</th>   
                             
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($drivers as $driver)
                        <tr>
                            <td> {{ $driver->fname }}</td>
                            <td>{{ $driver->mname }}</td>
                            <td>
                               {{$driver->dob}}
                            </td>
                            <td>{{$driver->licence_type}}</td>
                            <td>
                               
                                 <a href="#">More details</a>
                               
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            
               <!-- <x-jet-welcome /> -->
            </div>
        </div>
    </div>
</x-app-layout>
</body>