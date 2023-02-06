@extends('layout') 

@section('content') 
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Edit formulaire</h3> 
                    </div>
                    <div class="col-md-6">
                        <a href="{{route('formulaire.classe')}}" class = "btn btn-primary float-end">All Formulaire</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{route('formulaire.update', $formulaire->id)}}" method = "POST"> 
                    @csrf
                    @method('PUT') 
                    <div class="form-grou">
                        <strong>Prenom</strong>                           
                        <input type="text" class="form-control" name="prenom" value="{{$formulaire->prenom}}" placeholder="Formulaire Prenom"> 
                    </div>
                    <div class="form-group">
                        <strong>Nom</strong>                                                       
                        <textarea name="nom" rows="6" class="form-control" placeholder="Nom">{{$formulaire->nom}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-success mt-2">Update</button> 
                </form>
            </div>
        </div>
    </div>

@endsection