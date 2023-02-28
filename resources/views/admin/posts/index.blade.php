@extends('layouts.admin')
@section('content')
    <div class="contaier">
        <div class="row">
            <div class="col-12 my-5">
                <div class="d-flex justify-content-between">
                    <div>
                        <h2>Elenco Progetti</h2>
                    </div>
                    <div>
                        <a href="{{ route('admin.posts.create')}}" class="btn btn-sm btn-danger">Aggiungi Progetti</a>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                        <th>Id</th>
                        <th>Titolo</th>
                        <th>Titolo</th>
                        <th>Titolo</th>
                    </thead>
                    <tbody>
                        @foreach ($posts as $project)
                            <tr>
                                <td>{{$project->id}}</td>
                                <td>{{$project->title}}</td>
                                <td>{{$project->slug}}</td>
                                <td>{{--Segnaposto per azioni--}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection