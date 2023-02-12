@extends('layouts.app')
@section('content')
 <div class="mx-auto text-center"> <br>
<a href="\index" class="btn btn-primary">Revenir au menu principal</a>
<a href="{{route('listemedicaments.create')}}" class="btn btn-primary">Enregistrer une ordonnance</a>
</div> <br>
        <div class="medtable">
        <h3 style="color:white;text-align:center;background-color:darkgreen;"> Ordonnance du client</h3>
     

<div class="table" style="overflow-x:auto;"  >
        <table class="table table-hover">
          <thead class="thead-dark">
            <tr>
              <th scope="col">N° Ordonnance</th>
              <th scope="col">Nom du client</th>
              <th scope="col">Photo</th>
              
              
              <th scope="col"  >Date d'émission</th>
              
              <th scope="col" >Actions</th>
            </tr>
          </thead>
          <tbody id="mytable">
          @foreach($listemeds as $listemed) 
        
<tr >
            <th scope="col"><span>ORD00</span>{{$listemed->id}}</th>
            <th scope="col">{{$listemed->nomclient}}</th>
            <th scope="col"><img src="{{ asset('/images/'.$listemed->image)}}" alt="" width="50px"></th>
           
            
            <th scope="col">{{$listemed->created_at}}</th>
            
            
            <th scope="col">
                
            <a class="btn btn-success" a href="{{route('listemedicaments.edit',$listemed->id)}}" style="color:white;">Modifier</a>
<form action="{{route('listemedicaments.destroy',$listemed->id)}}" method="POST" style="display:inline-block;">
@csrf
@method('DELETE')
<button class="btn btn-danger " type="submit">Supprimer</button>
</form>
<a class="btn btn-info" href="">Actualiser</a>
<a class="btn btn-info" href="{{ asset('/images/'.$listemed->image)}}"> Voir l'ordonnance</a>


            </th>
        </tr>
       
          </tbody>
          @endforeach
        </table>
        
        {{$listemeds->links(("pagination::bootstrap-4"))}}"
      </div>   
      @endsection

    </div> 
    </div>

    
    






















<style>


body{
    height:1000px;

}



.footer{ bottom:0;
position:absolute;
background-color:black;
width:100%;
height:120px;
color:white;

}


.table{
width:80%;

}
.medtable{position:relative;
border: 1px solid black;
box-sizing:border-box;
}



</style>