@extends('layouts.app')
@section('content')


   

 
<div class="col-sm text-center "  style="position:absolute;top:120px;height:100%;" >
  <marquee behavior="" direction=""><h5>Bienvenue sur Pharmalogic 1.0, l'application Web destinée aux environnements pharmaceutiques</h5></marquee>

  

<div class="row">
   



   <div class="col-lg-3 col-xs-6">
  <div class="card bg-white">
    <div class="card-header" style="background-color:blue;"><h5>Gestion des médicaments</h5></div>
<div class="inner" style="height:100px;">
<h6>Tout ce qui concerne la gestion du stock de médicaments de votre pharmacie,<br>
gérez votre stock en un clic.</h6>

 </div>
 <a href="/medicaments" class="btn btn-warning">Accéder au menu <i class="fa fa-arrow-circle-right"></i></a>


</div>
  </div>



  <div class="col-lg-3 col-xs-6">
  <div class="card bg-white">
    <div class="card-header" style="background-color:red;"><h5>Gestion des ordonnances</h5></div> <br>
<div class="inner"  style="height:80px;">
<h6>Tout ce qui concerne la gestion du stock de médicaments de votre pharmacie,<br>
gérez votre stock en un clic.</h6>

 </div>
 <a href="/listemedicaments" class="btn btn-success">Accéder au menu <i class="fa fa-arrow-circle-right"></i></a>


</div>
  </div>


  <div class="col-lg-3 col-xs-6">
  <div class="card bg-white">
    <div class="card-header" style="background-color:green;"><h5><i class="ion ion-bag"></i>Gestion des commandes</h5></div> <br>
<div class="inner"  style="height:80px;">
<h6>Tout ce qui concerne la gestion des commandes émanant de la pharmacie,<br>
gérez vos commandes en un clic.</h6>

 </div>
 <a href="/ordonnances" class="btn btn-primary"> Accéder au menu <i class="fa fa-arrow-circle-right"></i></a>


</div>
  </div>

  <div class="col-lg-3 col-xs-6">
  <div class="card bg-white">
    <div class="card-header" style="background-color:orange;"><h5>Gestion du personnel</h5></div> <br>
<div class="inner"  style="height:80px;">
<h6>Tout ce qui concerne la gestion du personnel de la pharmacie,<br>
gérez vos employés de maniére efficace.</h6>

 </div>
 <a href="/personnel" class="btn btn-danger">Accéder au menu <i class="fa fa-arrow-circle-right"></i></a>


</div>
  </div>

 

  </div> <br>

  <div class="cardd" style="color:black;">
              <h3>Pharmalogic est une application Web destinée aux environnements pharmaceutiques</h3> <br>
     
          <h6>- Retrouvez les informations pratiques de votre pharmacie : adresse, téléphone...</h6>
           <h6>- Envoyez votre ordonnance pour que votre pharmacie vous la prépare.</h6>
           <h6>- Stockez toutes vos ordonnances de façon sécurisée.</h6>
           
         

              </div>

   

            
   </div>



  

  <style>
      body{
          height:100vh;
      }


      html {
  height:100%;
}

body {
  margin:0;
}







  </style>