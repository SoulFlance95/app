@extends('layouts.layout')
@section('content')



<div class="medform">
<div class="site-section">
      <div class="container">
        <div class="row">



          <div class="col-md-12">
            <h2 class="h3 mb-5 text-black" style="text-align:center;">Modifier l'ordonnance du client</h2>
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
    
            <form action="{{ route('listemedicaments.update', $listemeds->id) }}" method="POST">
                @csrf
                @method('PUT')
    
              <div class="p-3 p-lg-5 border">
                <div class="form-group row">
                
                  

                 
                
                
               
                  <div class="col-md-6">
                    <label for="nomclient" class="text-black">Nom du client </label>
                    <input type="text" class="form-control"  name="nomclient" value="{{$listemeds->nomclient}}" required="">
                  </div>

                  <div class="col-md-6">
                    <label for="image" class="text-black">Photo</label>
                    <input type="file" class="form-control"  name="image" value="{{$listemeds->photo}}" required="">
                  </div>

          


                </div>
                
                <div class="col-md-6">
                <label for="created_at">Date de création<input type="date" name="created_at" value="{{$listemeds->created_at}}"></label><br>
                </div>

                <div class="form-group row">
                  <div class="col-lg-12">
                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Mettre a jour l'ordonnance"><br>
                   <a href="/listemedicaments"><input type="button" class="btn btn-primary btn-lg btn-block" value="Revenir au menu précédent"></a> 
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