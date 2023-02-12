@extends('layouts.app')
@section('content')


<div class="ordtable">
<h3 style="color:white;text-align:center;background-color:darkblue;"> Menu Gestion d'ordonnances</h3>
        <div class="table table-hover">
        <table class="table">
          <thead class="thead-dark">
            <tr>
            <th scope="col">N* Ordonnance</th>
              <th scope="col">Date d'émission</th>
              <th scope="col">Total</th>
              <th scope="col" style="width:50%;">Actions</th>


            </tr>
          </thead>
          <tbody id="mytable">
          

            <tr>
            
            <th scope="col" style="text-align:center;"></th>
            <th scope="col"></th>
            <th scope="col" ><span>FCFA TTC</span></th>
            <th scope="col">
<a class="btn btn-success" a href=""  style="color:white;">Modifier</a>
<form action="" method="post" style="display:inline-block;">
@csrf
@method('DELETE')
<button class="btn btn-danger"  type="submit">Supprimer</button>
</form>
<a class="btn btn-info" href="">Voir Ordonnance</a>

            </th>
        </tr>
          </tbody>
       
        </table>
      </div>
@endsection
    </div> 
    </div>

    <div class="addbtn">
    <a class="btn btn-success" href="">Voulez vous enregistrer une nouvelle ordonnance?</a>

    </div>
    
















    <style>

        .ordtable{position:relative;
        top:200px;
   
   border: 1px solid black;
   box-sizing:border-box;

    }


    .
body{
    height:1000px;

}



.footer{ top:1000px;
position:absolute;
background-color:black;
width:100%;
height:150px;
color:white;

}

.addbtn{
position:absolute;
top:150px;
float:left;
left:500px;

}




    </style>