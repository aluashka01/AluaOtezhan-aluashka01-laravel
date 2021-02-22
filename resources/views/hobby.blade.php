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

    <div class="page-cont">
        
    </div>
    
    <div class="header">
        <div class="logo"><img src="{{asset('images/IMGBIN_linkin-park-logo-music-png_fMNWG7rr.png')}}" height="70px" width="70px"></div>
        <div class="menu-wrapper">

            <div class="menu">
                         
                <ul>
                    <li class="b1"><a href="{{route('home')}}"> About me</a></li>
                     <li class="b2"><a href="{{route('hobby')}}">Hobby</a></li>
                     <li class="b" ><a href="{{route('contacts')}}">Contacts</a></li>
                    
                </ul>           
</div>
        </div>
    
        <div id="bar-animation">

            <span></span>   
        </div>
    </div>
    
   
   
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="{{asset('images/photo5303327748137267556.jpg')}}" alt="Первый слайд">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{asset('images/photo5303327748137267557.jpg')}}" alt="Второй слайд">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{asset('images/photo5303327748137267558.jpg')}}" alt="Третий слайд">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{asset('images/photo5303327748137267706.jpg')}}" alt="Третий слайд">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{asset('images/photo5303327748137267705.jpg')}}" alt="Третий слайд">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{asset('images/photo5303327748137267704.jpg')}}" alt="Третий слайд">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
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
    height: 60px;
    width: 60px;
    margin-left: 100px;
}
.header .menu ul li{

    display: inline;
    padding: 10px 60px;
}
.header{
    align-items: center;
    background-color: black;
    position: fixed;
    width: 100%;
    height: 100px;
    border-radius: 0 0 40% 10%;
    box-shadow: 0px 2px 4px white ;
    font-size: 20px;
    margin-right: 150px;
    display: flex;
    justify-content: space-around;
    color: white;
    z-index: 2;
    
}

li a{
    text-decoration:none;
    color:wheat;
    cursor: pointer;
}
.page-cont{
    height: 100%;
    width: 100%;
    position: fixed;
    background-image: url({{asset('images/2227996.jpg')}});
    
}

#carouselExampleIndicators{
    position: relative;
    width: 450px;
    height: 850px;
    padding-top:50px;
}
.wrapper {
    width: 1300px;
    background-color:wheat;
    position: relative;
    margin-left: -800px;
    display: flex;
    padding: 20px;
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
}</style>
  
</body>

</html>