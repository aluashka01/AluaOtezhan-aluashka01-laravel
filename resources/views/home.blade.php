<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>my cv</title>
  <script src="https://cdn.jsdelivr.net/jquery.typeit/4.4.0/typeit.min.js"></script> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

 
</head>
<body>
@extends('layout')
@section('content')
    <div class="page-cont">
        
    </div>
    
    <div class="header" style="margin-top:-26px">
        <div class="logo"><img src="{{asset('images/IMGBIN_linkin-park-logo-music-png_fMNWG7rr.png')}}" height="70px" width="70px"></div>
        <div class="menu-wrapper">

            <div class="menu">
                         
                <ul>
                    <li class="b1"><a href="{{route('home')}}"> {{ __('lang.home') }}</a></li>
                     <li class="b2"><a href="{{route('hobby')}}">{{ __('lang.hobby') }}</a></li>
                     <li class="b" ><a href="{{route('contacts')}}">{{ __('lang.contacts') }}</a></li>
                    
                </ul>           
</div>
        </div>
    
        <div id="bar-animation">

            <span></span>   
        </div>
    </div>
    <div class = "first">  
    <div class="tx">
        <h1>
        {{ __('lang.about') }}
            
        </h1>
    </div>
<div><div id="tp_time">&nbsp;&nbsp;&nbsp;&nbsp;<span>{{ __('lang.message') }}</span></div>
<div class="swiper-container">
  <div class="swiper-wrapper">
    
        <div class="imgBox">
            <img src="{{asset('images/photo5303327748137267541.jpg')}}" width="400px" height="400px">
        
        
    </div>
    
  
    </div>
   
  
  
        <style>@import url('https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,500;0,800;1,700;1,900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Bad+Script&display=swap');
@import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
*{
    list-style: none;
    text-decoration: none;
    margin: 0px auto;
    font-family: 'Raleway', sans-serif;
    background-color:dark;

}
.tx{display:inline;}

body{
    height: 100%;
    min-height: 100vh;
}
.header .menu{
    display: absolute;
    margin-right: 30px;
    
}

.header .logo{
    height: 80px;
    width: 80px;
    margin-left: 100px;
}
.header .menu ul li{

    display: inline;
    padding: 10px 60px;

}
.header{
    align-items: center;
    background-color: black;
    position: absolute;
    width: 100%;
    height: 100px;
    border-radius: 0 0 40% 10%;
    box-shadow: 0px 2px 4px white ;
    font-size: 25px;
    margin-right: 150px;
    display: flex;
    justify-content: space-around;
    color: white;
    z-index: 2;
    
}

li a{
    cursor: pointer;
    color:wheat;
}
.page-cont{
    height: 100%;
    width: 100%;
    position: absolute;
    background-color:dark;
    background-image: url({{asset('images/2227996.jpg')}});
    
}

.tx h1{
    position: absolute;
    margin: 0;
    padding:130px 0 0 220px;
    font-family: 'Bad Script',cursive;
    color:rgb(39, 148, 238);
    font-size: 75px;
}


@keyframes animate{

    0%,100%{
         color: rgb(255, 255, 255);
         filter: blur(5px);
         


    }
    5%,95%{
        color: rgb(5, 154, 199);
        filter: blur(0px);
        text-shadow:0 0 10px none,
   }
    
}

#tp_time{
    color: rgb(255, 255, 255);
    padding: 235px 0 0 80px;
    font-size: 30px;
    width: 800px;
    
    line-height: 50px;
    position:absolute;
   
}


.swiper-container {
    top: 180px;
    width: 400px;
    height: 400px;
    left: 25%;
    position: absolute;
    box-shadow: 0px 10px 20px 22px gray ;
    margin-left: 500px;
    margin-top: 50px;
    background-size: cover;
    z-index: 1;
  }
#carouselExampleIndicators{
    position: relative;
    margin-top: 100px;
    margin-left: -500px;
    width: 550px;
    height: 1000px;
}

}</style>
@endsection
  
</body>

</html>