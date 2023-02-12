@extends('layouts.app')
@section('content')
  
<div class="mx-auto text-center"> <br>
<a href="{{route('medicaments.create')}}" class="btn btn-success" target="popup">  
 Ajouter un médicament</a>
<a href="\index" class="btn btn-primary">Revenir au menu principal</a>
        


</div> <br>
        <div class="medtable">
        
        <h3 style="color:white;text-align:center;background-color:darkgreen;"> Menu Gestion des médicaments</h3>
       
     
        <form action="/search" method="GET" role="search">
        <input type="search" id="q" name="q" placeholder="Rechercher un élément...">
        <button type="submit" id="submitButton" class="btn btn-primary">Go</button>

        </form>

     
       

<div class="table" style="overflow-x:auto;" >

        <table class="table table-hover">
          <thead class="thead-dark">
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Photo</th>
              <th scope="col">Nom</th>
              <th scope="col">Laboratoire</th>
              <th scope="col">Description</th>
              <th scope="col"  >Dosage</th>
             
              <th scope="col" >Quantité</th>
              <th scope="col" >Prix unitaire</th>
             
              <th scope="col"  >Date de fabrication</th>
              <th scope="col" >Date de péremption</th>
              <th scope="col" >Actions</th>
            </tr>
          </thead>
          <tbody id="mytable">
         @foreach($medics as $medicament) 
        
        
<tr >
            <th scope="col">MED00<span></span>{{$medicament->id}}</th>
            <th scope="col"><img src="{{ asset('/images/'.$medicament->image)}}" alt="" width="50px"></th>
            <th scope="col">{{$medicament->nommedicament}}</th>
            <th scope="col">{{$medicament->nomlaboratoire}}</th>
            <th scope="col">{{$medicament->description}}</th>
            <th scope="col">{{$medicament->dosage}}</th>
           
            <th scope="col">{{$medicament->stocks}}</th>
            <th scope="col">{{$medicament->prix}} <span> FCFA</span></th>
            <th scope="col">{{$medicament->created_at}}</th>
            <th scope="col">{{$medicament->updated_at}}</th>
           
            <th scope="col">
                
            <a class="btn btn-success" a href="{{route('medicaments.edit',$medicament->id)}}" style="color:white;">Modifier</a>
<form action="{{route('medicaments.destroy',$medicament->id)}}" method="post" style="display:inline-block;">
@csrf
@method('DELETE')
<button class="btn btn-danger " type="submit">Supprimer</button>
</form>
<a class="btn btn-info" href="">Actualiser</a>

            </th>
        </tr>
        @endforeach
          </tbody>
        </table>
        {{$medics->links(("pagination::bootstrap-4"))}}"


      </div>   
      
      @endsection

    </div> 

   

    </div>


 </div>
    










<style>




.footer{bottom:0;
position:fixed;
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