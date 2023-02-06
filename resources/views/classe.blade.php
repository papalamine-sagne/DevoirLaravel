@extends('layout') 

@section('content') 
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Post</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="{{route('post.create')}}" class="btn btn-primary float-end">Ajouter</a>
                    </div>
                </div>
            </div>
            <div class="card-body">      
                @if (Session::get('message'))  
                    <div class="alert alert-success">
                        {{Session::get('message')}}
                    </div>
                @endif
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Prenom</th>
                            <th>Nom</th>
                            <th>Matiere</th>
                            <th>Note</th>
                            <th>Examen</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($formulaires as $formulaire) 
                            <tr>
                                <td>{{++$i}}</td>
                                <td>{{$formulaire->Prenom}}</td>
                                <td>{{$formulaire->Nom}}</td>
                                <td>{{$formulaire->Matiere}}</td>
                                <td>{{$formulaire->Note}}</td>
                                <td>{{$formulaire->Examen}}</td>
                                <td> 
                                    <form action="{{route('formulaire.destroy', $formulaire->id)}}" method="POST">
                                        <a href="{{route('formulaire.edit', $formulaire->id)}}" class="btn btn-info">Edit</a>
                                    
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection