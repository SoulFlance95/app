@extends('layouts.layout')
@section('content')



<div class="medform">
<div class="site-section">
      <div class="container">
        <div class="row">



          <div class="col-md-12">
            <h2 class="h3 mb-5 text-black" style="text-align:center;">Modifier un employé</h2>
            @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
          </div>
          <div class="col-md-12">
    
            <form action="{{ route('personnel.update', $perso->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
    
              <div class="p-3 p-lg-5 border">
                <div class="form-group row">
                
                  
            
                  <div class="col-md-6">
            <input type="file" class="form-control" name="image">
          </div>
                 
                  <div class="col-md-6">
                    <label for="nom" class="text-black">Nom<span class="text-danger">*</span></label>
                    <input type="text" class="form-control"  name="nom" value="{{$perso->nom}}" required="">
                  </div>
               
              
           <div class="col-md-6">
                    <label for="prenom" class="text-black">Prénom</label>
                    <input type="text" class="form-control"  name="description" value="{{$perso->prenom}}" required="">
                  </div>
                
                <div class="col-md-6">
            <label for="age" class="text-black">Age<span class="text-danger">*</span></label>
            <input type="number" class="form-control"  name="age" value="{{$perso->age}}" required="">
          </div>
        </div>
                
        <div class="form-group row">
          <div class="col-md-6">
            <label for="fonction" class="text-black">Fonction </label>
            <input type="text" class="form-control"  name="fonction" value="{{$perso->fonction}}" required="">
          </div>
      
        
          <div class="col-md-6">
            <label for="salaire" class="text-black">Salaire </label>
            <input type="number" class="form-control"  name="salaire"  value="{{$perso->salaire}}"required="">
          </div>
        </div>
              
                <div class="form-group row">
                  <div class="col-lg-12">
                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Mettre a jour"><br>
                   <a href="/personnel"><input type="button" class="btn btn-primary btn-lg btn-block" value="Revenir au menu précédent"></a> 
                  </div>
                  </div>
              </div>
            </form>
          </div>
          
          
        </div>
      </div>
    </div>

    </div>
 @endsection

    <style>
        .medform{

position: absolute;
top:130px;
height:200px;
float:left;
left:150px;
}




    </style>