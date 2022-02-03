@extends('layouts.app')
@section('content')
    <h1>Welcome to our sight </h1>

    
<html lang="en" dir="ltr">
  
  <body>
    <div class="container">
      <div class="content">
        <div class="left-side">
          <div class="address details">
            <i class="fas fa-map-marker-alt"></i>
            <div class="topic">Address</div>
            <div class="text-one">Mohammadpur </div>
            <div class="text-two">House no 66/122</div>
          </div>
          <div class="phone details">
            <i class="fas fa-phone-alt"></i>
            <div class="topic">Phone</div>
            <div class="text-one">+0098 9893 5647</div>
            <div class="text-two">+0096 3434 5678</div>
          </div>
          <div class="email details">
            <i class="fas fa-envelope"></i>
            <div class="topic">Email</div>
            <div class="text-one">rifatahmed@@gmail.com</div>
            <div class="text-two">info.tecno@gmail.com</div>
          </div>
        </div>
        <div class="right-side">
          <div class="topic-text">Send us a message</div>
          <p>If you have any work or any problem contract us </p>
        <form action="#">
          <div class="input-box">
            <input type="text" placeholder="Enter your name">
          </div>
          <div class="input-box">
            <input type="text" placeholder="Enter your email">
          </div>
          <div class="input-box message-box">
            
          </div>
          <div class="button">
            <input type="button" value="Send Now" >
          </div>
        </form>
      </div>
      </div>
    </div>
  </body>
  </html>


@endsection
