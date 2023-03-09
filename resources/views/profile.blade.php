@extends('layout')
@section('title', 'profile')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="height:85vh;">
<div class="signup-form">
    <div class="container">
    <div class="header">
      <h1>Profile</h1>
    </div>
    <form method="POST" action="{{route('update-profile')}}">
      @csrf
        <div class="input">
        <i class="fa-solid fa-at"></i>
        <input type="text"  name="username" value="{{$data->username}}" required/>
      </div>
      <div class="input">
        <i class="fa-solid fa-user"></i>
        <input type="text" value="{{$data->name}}" name="name" required/>
      </div>
      <div class="input">
        <i class="fa-solid fa-calendar-days"></i>
        <input type="date" value="{{$data->dob}}" name="dob" required/>
      </div>
      <div class="input">
        <i class="fa-solid fa-envelope"></i>
        <input type="email" value="{{$data->email}}" name="email" required />
      </div>
      
      <div class="input">
        <i class="fa-solid fa-phone"></i>
        <input type="text" value="{{$data->mobno}}" name="mobno" required/>
      </div>
      <input class="signup-btn" type="submit" value="Update Profile" />
    </form>
  </div>
</div>
</div>

@endsection