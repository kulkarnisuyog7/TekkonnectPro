@extends('layout')
@section('title', 'Register')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="height:85vh;">
<div class="signup-form">
    <div class="container">
    <div class="header">
      <h1>Create an Account</h1>
      <p>Get started for free!</p>
    </div>
    <form action="{{route('register-user')}}" method="POST">
      @csrf
      <div class="input">
        <i class="fa-solid fa-at"></i>
        <input type="text" placeholder="Username" name="username" required/>
      </div>
      <div class="input">
        <i class="fa-solid fa-user"></i>
        <input type="text" placeholder="Full Name" name="name" required/>
      </div>
      <div class="input">
        <i class="fa-solid fa-calendar-days"></i>
        <input type="date" placeholder="Date of Birth" name="dob" required/>
      </div>
      <div class="input">
        <i class="fa-solid fa-envelope"></i>
        <input type="email" placeholder="Email" name="email" required />
      </div>
      
      <div class="input">
        <i class="fa-solid fa-phone"></i>
        <input type="text" placeholder="Mobile number" name="mobno" required/>
      </div>
      <div class="input">
        <i class="fa-solid fa-lock"></i>
        <input type="password" placeholder="Password" name="password" required />
      </div>
      <input class="signup-btn" type="submit" value="SIGN UP" />
    </form>
    <p>Already have an account <a href="{{route('login')}}">sign in</a></p>
  </div>
</div>
</div>

@endsection