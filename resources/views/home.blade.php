@extends('layouts.app')
@section('content')

<div class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div>


<div class="container">
        <div class="row">
         
            <div class="col-sm text-center" style="position:relative;top:130px;">
              <h2 style="color:white;text-align:center;" >Gérez votre pharmacie en 1-clic</h2>
              <h1 style="color:white;">Bienvenue sur Pharmalogic 1.0</h1> <br>
              <a href="./index" class="btn btn-primary px-5 py-3" style="animation:slide 2s ease-in-out infinite alternate;">Accéder au menu principal</a> <br><br>
             
            
              </div>

             
            
          </div>

        
              


        </div>
     
     
        



@endsection


<style>

    body{ background-image:url('images/hero1.jpg');
      background-size:cover;
      background-repeat:no-repeat;
  
      
    }

    html {
  height:1000px;
}

body {
  margin:0;
}

.bg {
  animation:slide 3s ease-in-out infinite alternate;
  background-image: linear-gradient(-60deg, #6c3 50%, #09f 50%);
  bottom:0;
  left:-50%;
  opacity:.5;
  position:fixed;
  right:-50%;
  top:0;
  z-index:-1;
  opacity:30%;
}

.bg2 {
  animation-direction:alternate-reverse;
  animation-duration:4s;
  opacity:30%;
}

.bg3 {
  animation-duration:5s;
  opacity:30%;
}

.content {
  background-color:rgba(255,255,255,.8);
  border-radius:.25em;
  box-shadow:0 0 .25em rgba(0,0,0,.25);
  box-sizing:border-box;
  left:50%;
  padding:10vmin;
  position:fixed;
  text-align:center;
  top:50%;
  transform:translate(-50%, -50%);
}

h1 {
  font-family:monospace;
}

@keyframes slide {
  0% {
    transform:translateX(-25%);
  }
  100% {
    transform:translateX(25%);
  }
}






</style>
