@extends('layouts.layout')
@section('content')


<div class="medform">
<div class="site-section">
      <div class="container">
        <div class="row">



          <div class="col-md-12">
            <h2 class="h3 mb-5 text-black" style="text-align:center;">Ajouter une commande-client</h2>
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
    
            <form action="{{ route('ordonnances.store') }}" method="POST">
                @csrf
    
              <div class="p-3 p-lg-5 border">
                <div class="form-group row">
               
                  <div class="col-md-6">
                    <label for="libellé" class="text-black" >Nom du fournisseur<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="libellé" required="">
                  </div>
                  <div class="col-md-6">
                    <label for="nommedicament" class="text-black" >Nom du médicament<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="nommedicament" required="">
                  </div>

                  <div class="col-md-6">
                    <label for="prix" class="text-black" >  Prix unitaire<span class="text-danger">*</span></label>
                    <input type="number" class="form-control" name="prix" required="">
                  </div>

                  
                 
                 
                
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="created_at" class="text-black">Date d'émission </label>
                    <input type="date" class="form-control"  name="created_at" required="">
                  </div>

                  <div class="col-md-6">
                    <label for="stock" class="text-black" >  Quantité<span class="text-danger">*</span></label>
                    <input type="number" class="form-control" name="stock" required="">
                  </div>
                </div>
             
               
                
                <div class="form-group row">
                  <div class="col-lg-12">
                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Valider"><br>
                   <a href="/ordonnances"><input type="button" class="btn btn-primary btn-lg btn-block" value="Revenir au menu précédent"></a> 
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

position: relative;
top:0px;

float:left;
left:150px;
}




    </style>