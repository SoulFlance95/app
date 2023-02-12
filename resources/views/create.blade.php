@extends('layouts.layout')
@section('content')


<div class="medform">
<div class="site-section">
      <div class="container">
        <div class="row">



          <div class="col-md-12">
            <h2 class="h3 mb-5 text-black" style="text-align:center;">Ajouter un médicament</h2>
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
    
            <form action="{{ route('medicaments.store') }}" method="POST" enctype="multipart/form-data" >
                @csrf
    
              <div class="p-3 p-lg-5 border">
                <div class="form-group row">
                <div class="col-md-6">
                    <input type="file" class="form-control" name="image">
                  </div>
               
                  <div class="col-md-6">
                    <label for="nommedicament" class="text-black">Nom <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="nommedicament" required="">
                  </div>
                 
                  <div class="col-md-6">
                    <label for="nomlaboratoire" class="text-black">Laboratoire<span class="text-danger">*</span></label>
                    <input type="text" class="form-control"  name="nomlaboratoire" required="">
                  </div>
                
                
             
                  <div class="col-md-6">
                    <label for="description" class="text-black">Description </label>
                    <input type="text" class="form-control"  name="description" required="">
                  </div>
                  <div class="col-md-6">
                    <label for="dosage" class="text-black">Dosage</label>
                    <input type="text" class="form-control"  name="dosage" required="">
                  </div>
                  <div class="col-md-6">
                    <label for="stocks" class="text-black">Quantité</label>
                    <input type="number" class="form-control"  name="stocks" required="">
                  </div>
                  <div class="col-md-6">
                    <label for="prix" class="text-black">Prix unitaire</label>
                    <input type="number" class="form-control"  name="prix" required="">
                  </div>
                </div>
                
                  
                
              
                
                <div class="form-group row">
                <label for="date de fabrication">Date de fabrication:<input type="date" name="created_at"></label><br><br>
                <label for="date de péremption">Date de péremption:<input type="date" name="updated_at"></label>
                </div>

                <div class="form-group row">
                  <div class="col-lg-12">
                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Ajouter"><br>
                   <a href="/medicaments"><input type="button" class="btn btn-primary btn-lg btn-block" value="Revenir au menu précédent"></a> 
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