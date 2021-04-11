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

    <div class="main-block">
      <div class="left-part">
        <i class="fas fa-envelope"></i>
        <i class="fas fa-at"></i>
        <i class="fas fa-mail-bulk"></i>
      </div>
      <form action="/">
        <h1>{{ __('lang.cntm') }}</h1>
        <div class="info">
          <input class="fname" type="text" name="name" placeholder="Full name">
          <input type="text" name="name" placeholder="Email">
          <input type="text" name="name" placeholder="Phone number">
          <input type="text" name="name" placeholder="Website">
        </div>
        <p>Message</p>
        <div>
          <textarea rows="4"></textarea>
        </div>
        <button type="submit" href="/">Submit</button>
      </form>
    </div>

   
    
     
    <div class="wrapper">
    
      <div class="ico-wrap"> <i class="fa fa-map-marker ico-contact"></i>
      </div>
      <div class="descript-wrapper">
          <h4 class="aio-icon-title">Location:</h4>
          <div class="aio-icon-description">
              Kazakhstan,Almaty
              </div>
      </div>
  
      <span class="clearfix"></span>
  
      <div class="ico-wrap"> <i class="fa fa-clock-o ico-contact"></i>
      </div>
      <div class="descript-wrapper">
          <h4 class="aio-icon-title">Work time:</h4>
          <div class="aio-icon-description">
              Monday-Friday from 9:00 to 18:00.
              <br>13:00-15:00 break</div>
      </div>
  
      <span class="clearfix"></span>
  
      <div class="ico-wrap">
          <i class="fa fa-envelope ico-contact"></i>
      </div>
      <div class="descript-wrapper">
          <h4 class="aio-icon-title">Email:</h4>
          <div class="aio-icon-description">
              alua.otezhan@mail.ru
              <br>190103411@stu.sdu.edu.kz</div>
      </div>
  
      <span class="clearfix"></span>
  
      <div class="ico-wrap">
          <i class="fa fa-phone ico-contact"></i>
      </div>
      <div class="descript-wrapper">
          <h4 class="aio-icon-title">Phone number:</h4>
          <div class="aio-icon-description">
              8 (777) 777-77-77
              <br>8 (777) 777-77-66</div>
      </div>
  
      <span class="clearfix"></span>
  
  </div>
  
  
        <style>@import url('https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,500;0,800;1,700;1,900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Bad+Script&display=swap');
@import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
*{
    list-style: none;
    text-decoration: none;
    margin: 0 auto;
    font-family: 'Raleway', sans-serif;
   

}

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
a{
    text-decoration:none;
    color:wheat;
}

li{
    cursor: pointer;
}
.page-cont{
    height: 100%;
    width: 100%;
    position: absolute;
    background-image: url({{asset('images/2227996.jpg')}});
    
}



.wrapper {
    padding:10px 10px 10px 10px;
    margin-top:50px;
    width: 1300px;
    height:100px;
    background-color:wheat;
    position: relative;
    display: flex;
    z-index: 2;
  }
 
  .clearfix:after,
  .clearfix:before {
    content: ".";
    display: block;
    overflow: hidden;
    visibility: hidden;
    font-size: 0;
    line-height: 0;
    width: 0;
    height: 0;
    clear: both;
    bottom:0px;
  }
  .ico-wrap {
      color: #ECAB00;
      width: 50px;
      height: 50px;
      margin: 25px 20px 2px 2px;
      display: block;
      text-align: center;
      font-size: 25px;
      border: 2px solid #ECAB00;
      float: left;
  }
  .ico-contact {
      line-height: 1.9 !important;
  }
  .descript-wrapper {
      float: left;
      margin-bottom: 20px;
  }
  .aio-icon-title {
      font-size: 18px;
      color: #ECAB00;
      line-height: 1;
      margin-bottom: 10px;
  }
   
.cn{
    text-align: center;
}

      h1 {
      text-align:center;    
      margin: 0 0 20px;
      font-weight: 400;
      color:black;
      }
      p {
      margin: 0 0 5px;
      }
      .main-block {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      position:relative;
      }
      form {
      position:center;    
      padding: 25px;
      margin: 25px;
      width:700px;
      height:600px;
      box-shadow: 0 2px 5px #f5f5f5; 
      background: #f5f5f5; 
      }
      .fas {
      margin: 25px 10px 0;
      font-size: 72px;
      color: #fff;
      }
      
      .fa-at , .fa-mail-bulk{
      transform: rotate(10deg);
      }
      input, textarea {
      width: calc(100% - 18px);
      padding: 8px;
      margin-bottom: 20px;
      border: 1px solid #1c87c9;
      outline: none;
      }
      input::placeholder {
      color: #666;
      }
      button {
      width: 100%;
      padding: 10px;
      border: none;
      background: #1c87c9; 
      font-size: 16px;
      font-weight: 400;
      color: #fff;
      }
      button:hover {
      background: #2371a0;
      }    </style>
  @endsection
</body>

</html>