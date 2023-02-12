@extends('layouts.app')
@section('content')
 <br>
<div class="tuto"> 


<p class="h3" style="font-size:14px;text-align:center;">L'utilisateur devra d'abord  créer une commande pour le client, en cliquant sur le boutton ci-dessous:</h3><br>
<a href="{{route('ordonnances.create')}}" class="btn btn-success">Créer une commande</a>
<a href="\index" class="btn btn-primary">Revenir au menu principal</a>
<p p class="h3" style="font-size:14px;" > Une fois la commande confirmée, le pharmacien se chargera de la création de l'ordonnance du client.
  Pour cela il devra cliquer sur le boutton <strong>"créer une ordonnance"</strong>.
</h3></p>
</div>

<div class="ordtable">
<h3 style="color:white;text-align:center;background-color:darkblue;"> Liste des commandes</h3>
        <div class="table" style="overflow-x:auto;" >
        <table class="table table-hover" >
          <thead class="thead-dark">
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nom du fournisseur</th>
              <th scope="col">Nom du médicament</th>
              <th scope="col">Prix unitaire</th>
              <th scope="col">Quantité</th>
              <th scope="col">Total</th>
              <th scope="col">Mode de Paiement</th>
              <th scope="col">Date d'émission</th>
             
              <th scope="col">Actions</th>


            </tr>
          </thead>
          <tbody id="mytable">
          @foreach($ordos as $ordonnance) 
         

            <tr>
            <th scope="col"><span>COMM00</span>{{$ordonnance->id}}</th>
            <th scope="col">{{$ordonnance->libellé}}</th>
            <th scope="col">{{$ordonnance->nommedicament}}</th>
            <th scope="col">{{$ordonnance->prix}}</th>
            <th scope="col">{{$ordonnance->stock}}</th>
            <th scope="col">{{$ordonnance->prix*$ordonnance->stock}} <span> FCFA</span></th>
            
            <th scope="col">Virement bancaire</th>
            <th scope="col">{{$ordonnance->created_at}}</th>
            <th scope="col">
<a class="btn btn-success" a href="{{route('ordonnances.edit',$ordonnance->id)}}"  style="color:white;">Modifier</a>
<form action="{{route('ordonnances.destroy',$ordonnance->id)}}" method="post" style="display:inline-block;">
@csrf
@method('DELETE')
<button class="btn btn-danger"  type="submit">Supprimer</button>


<a class="btn btn-info" href="" style="color:white;">Actualiser</a>
</form>



            </th>
        </tr>
          </tbody>
          @endforeach
         
        </table>
        
        {{$ordos->links(("pagination::bootstrap-4"))}}"
      </div>
@endsection
    </div> 
    </div>

    





















    <style>

       


.footer{ bottom:0;
position:absolute;
background-color:black;
width:100%;
height:100px;
color:white;

}



body{
  height:1000px;
  width:100%;

}

    </style>