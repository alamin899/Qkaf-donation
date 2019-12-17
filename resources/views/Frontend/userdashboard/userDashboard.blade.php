@extends('Frontend.master')
@section('title')
    Home Page
@endsection

@section('content')
    <div class="container" style="min-height:300px">
       <h2> welcome <span>{{ $user->frist_name }}</span> </h2>
       <div class="card my-4">
            <div class="card-body">
                <div class=" col-md-12 row">
                     <div class="col-md-6">My Dashboard</div>
                     <div class="col-md-6" style="text-align:right">
                        <i class="far fa-edit"></i>
                        <a href="{{ route('user.profile') }}">Edit</a>
                    </div>
                </div>
                <hr>
                <div class="col-md-12 row">
                        <div class="col-md-6 userinfo">
                            <h2>User Information</h2>
                           <p>Frist-Name:</p>
                           <p> {{ $user->frist_name }}</p>
                           <p>Last-Name:</p>
                           <p> {{ $user->last_name }}</p>
                           <p>Email:</p>
                           <p> {{ $user->email }}</p>
                           <p>phone_no:</p>
                           <p>{{ $user->Phone}}</p>
                        </div>
                        <div class="col-md-6 useraddres">
                            <h2>User Address</h2>
                            <p>Country: {{ $user->country }}</p>
                            <p>State: {{ $user->state }}</p>
                            <p>City: {{ $user->city }}</p>
                            <p>Address: {{ $user->address }}</p>
                            <p>Address: {{ $user->postal_code }}</p>
                        </div>
                </div>
            </div>
       </div>
    </div>
@endsection
