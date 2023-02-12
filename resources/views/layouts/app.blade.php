<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Pharmalogic 1.0</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>



    <div id="app">

        
         <div class="wrapper">



        <nav class="navbar navbar-expand-md navbar-light shadow-sm" style="width:100%;background-color:#7c2d99 
;">
            <div class="container">
           
            <a class="navbar-brand" href="http://127.0.0.1:8000/home"><img src="images/pharmalogic.svg" alt="" height="50">
            <h6 style="color:white;">Gérez votre pharmacie en toute simplicité</h6>
        </a>
       
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>


               
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <div class="container" style="width:unset;">
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown"  href="/medicaments">  Gestion de médicaments</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a  class="dropdown-item" href="/medicaments/create">Ajouter un médicament</a>
            
                         <a  class="dropdown-item" href="/medicaments">Voir tous les médicaments</a>
                        </div>
                    </li>
                       
                    
                  <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown"  href="/ordonnances">Gestion des commandes</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a  class="dropdown-item" href="/ordonnances/create">Enregister une commande</a>
                         <a  class="dropdown-item" href="/ordonnances/">Voir toutes les commandes</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="/personnel">Gestion du personnel</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a  class="dropdown-item" href="/personnel/create">Ajouter un employé</a>
                         <a  class="dropdown-item" href="/personnel">Voir tous les employés</a>
                        </div>


                </li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="/listemedicaments">Gestion des ordonnances</a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a  class="dropdown-item" href="/listemedicaments/create">Créer une ordonnance</a>
                         <a  class="dropdown-item" href="/listemedicaments/">Voir toutes les ordonnances</a>
                        </div>
                    </li>
                    </ul>
                    </div>

                  

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                          
                            
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();
                                                     return confirm('Voulez vous réellement vous déconnecter?')
                                                     ">

                                        Se déconnecter
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
               

        </nav>
  



     
 






        
        </div>
    </div> 


     
         
   @yield('content')
  
   <footer class="fixed-bottom" style="color:white; background-color:black;height:80px;">
        <div class="footer-copyright text-center py-3">
        <?php  echo "<h3 class='sub-title' style='font-size:12px;'>Application Web développée par Nomad Technologies</h3>"?>
        <?php  echo "<h3 class='sub-title' style='font-size:12px;'>Tout droits réservés </h3>"?>

        </div>

  

    


</footer>
 



</body>
</html>

<style>







html,body{
height:1000px;
   
}
.navbar-light .navbar-nav .nav-link {
    color: white;
}


.btn-primary:hover {
    background-color: orange !important;
    transform:matrix3d;
}
.btn-success:hover {
    background-color: orange !important;
    transform:matrix3d;
}

.btn-warning:hover {
    background-color: orange !important;
    transform:matrix3d;
}
.btn-danger:hover {
    background-color: orange !important;
    transform:matrix3d;
}

.pagination {
    display: flex;
    position: absolute;
    float: left;
    padding-left: 0;
    left: 600px;
    list-style: none;
    border-radius: 0.25rem;
}

</style>
