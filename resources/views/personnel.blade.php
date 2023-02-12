@extends('layouts.app')
@section('content')
 <br>
<div class="tuto">

<h3 style="font-size:16px;text-align:center;">L'utilisateur a les priviléges de modifier le statut d'un employé, d'enregistrer un nouvel employé et aussi 
la possibilité de retirer un employé. <br>
<a href="{{route('personnel.create')}}" class="btn btn-success">Ajouter un employé</a>
<a href="\index" class="btn btn-primary">Revenir au menu principal</a>
</h3><br>


</div>   



  
        <div class="persotable">
        <h3 style="color:white;text-align:center;background-color:black;"> Menu Gestion du personnel</h3>
<div class="table" style="overflow-x:auto;" >
        <table class="table table-hover">
          <thead class="thead-dark">
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Photo</th>
              <th scope="col">Nom</th>
              <th scope="col">Prénom</th>
              <th scope="col">Age</th>
              <th scope="col">Fonction</th>
              <th scope="col">Salaire mensuel</th>
              <th scope="col">Salaire annuel</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody id="mytable">
          @foreach($perso as $personnel) 
            <tr>
            <th scope="col"><span>EMP00</span>{{$personnel->id}}</th>
            <th scope="col"> <img src="{{ asset('/images/'.$personnel->image)}}" alt="" width="100px"></th>
            <th scope="col">{{$personnel->nom}}</th>
            <th scope="col">{{$personnel->prenom}}</th>
            <th scope="col">{{$personnel->age}} <span>ans</span></th>
            <th scope="col">{{$personnel->fonction}}</th>
            <th scope="col">{{$personnel->salaire}} <span>FCFA/mois</span></th>            
            <th scope="col">{{$personnel->salaire*12}} <span>FCFA</span></th>

            <th scope="col">
<a class="btn btn-success" href="{{route('personnel.edit',$personnel->id)}}"  style="color:white;">Modifier</a>
<form action="{{route('personnel.destroy',$personnel->id)}}" method="post" style="display:inline-block;">
@csrf 
@method('DELETE')
<button class="btn btn-danger" type="submit">Supprimer</button>
</form>
<a class="btn btn-info" href="">Actualiser</a>

            </th>
        </tr>
          </tbody>
          @endforeach
        </table>
        
        {{$perso->links(("pagination::bootstrap-4"))}}"
      </div>   
      
@endsection
</div> 
   
    






















    <style>
body{
  height:1000px;
  width:100%;

}
      


    .footer{ bottom:0;
        position:absolute;
        background-color:black;
        width:100%;
        height:100px;
        color:white;

    }

  

    </style>