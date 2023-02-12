@extends('layouts.layout')
@section('content')



<div class="medform">
<div class="site-section">
      <div class="container">
        <div class="row">



          <div class="col-md-12">
            <h2 class="h3 mb-5 text-black" style="text-align:center;">Modifier une commande-client</h2>
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
    
            <form action="{{ route('ordonnances.update', $ordos->id) }}" method="POST">
                @csrf
                @method('PUT')
    
              <div class="p-3 p-lg-5 border">
                <div class="form-group row">
                
                  
             
                 
                  <div class="col-md-6">
                    <label for="libellé" class="text-black">Nom du fournisseur<span class="text-danger">*</span></label>
                    <input type="text" class="form-control"  name="libellé" value="{{$ordos->libellé}}" required="">
                  </div>
              
                
                <div class="col-md-6">
                    <label for="nommedicament" class="text-black" >Nom du médicament<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="nommedicament" value="{{$ordos->nommedicament}}" required="">
                  </div>

                  <div class="col-md-6">
                    <label for="prix" class="text-black" >  Prix unitaire<span class="text-danger">*</span></label>
                    <input type="number" class="form-control" name="prix"  value="{{$ordos->prix}}" required="">
                  </div>
 
                  
                  <div class="col-md-6">
                    <label for="stock" class="text-black" >  Quantité<span class="text-danger">*</span></label>
                    <input type="number" class="form-control" name="stock" value="{{$ordos->stock}}" required="">
                  </div>
                  </div>
                
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="created_at" class="text-black">Date d'émission</label>
                    <input type="date" class="form-control"  name="created_at" value="{{$ordos->created_at}}" required="">
                  </div>
                </div>
                
                <div class="form-group row">
                 
                </div>
                

                <div class="form-group row">
                  <div class="col-lg-12">
                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Mettre a jour la commande"><br>
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

position: absolute;
top:130px;
height:200px;
float:left;
left:250px;
}




    </style>