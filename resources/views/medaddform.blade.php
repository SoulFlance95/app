@extends('layouts.app')
@section('content')


<div class="medform">
<div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="h3 mb-5 text-black" style="text-align:center;">Ajouter un médicament</h2>
          </div>
          <div class="col-md-12">
    
            <form action="{{ route('medicaments.store') }}" method="post">
                @csrf
    
              <div class="p-3 p-lg-5 border">
               
                  
                  <div class="col-md-6">
                    <label for="nommedicament" class="text-black">Nom <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_fname" name="nommedicament">
                  </div>
                 
                  <div class="col-md-6">
                    <label for="nomlaboratoire" class="text-black">Laboratoire<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_lname" name="nomlaboratoire">
                  </div>
                </div>
                
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="description" class="text-black">Description </label>
                    <input type="text" class="form-control" id="c_subject" name="description">
                  </div>
                </div>
                <label for="date de fabrication">Date de fabrication<input type="date" name="date de fabrication"></label><br>
                <label for="date de péremption">Date de péremption<input type="date" name="date de péremption"></label>
                
                <div class="form-group row">
                  <div class="col-lg-12">
                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Envoyer"><br>
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