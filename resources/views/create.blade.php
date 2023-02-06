@extends('layout') 

@section('content') 
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Add post</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="{{route('post.index')}}" class = "btn btn-primary float-end">All Post</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{route('post.store')}}" method = "POST">
                    @csrf
                    <div class="form-group">
                        <strong>Prenom</strong>
                        <input type="text" class="form-control" name="prenom" placeholder="Prenom" autofocus>
                    </div>
                    <div class="form-group">
                        <strong>Nom</strong>
                        <textarea name="nom" rows="6" class="form-control" placeholder="Nom"></textarea>
                    </div>
                    <div class="form-group">
                        <strong>Matiere</strong>
                        <textarea name="matiere" rows="6" class="form-control" placeholder="Matiere"></textarea>
                    </div>
                    <div class="form-group">
                        <strong>Note</strong>
                        <textarea name="note" rows="6" class="form-control" placeholder="Note"></textarea>
                    </div>
                    <div class="form-group">
                        <strong>Examen</strong>
                        <textarea name="examen" rows="6" class="form-control" placeholder="Examen"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success mt-2">Enregistrer</button>
                </form>
            </div>
        </div>
    </div>

@endsection