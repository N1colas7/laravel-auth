@extends('layouts.admin')
@section('content')
    <div class="contaier">
        <div class="row">
            <div class="col-12 my-5">
                <div class="d-flex justify-content-around">
                    <div>
                        <h2>Elenco Progetti</h2>
                    </div>
                    <div>
                        <a href="{{ route('admin.posts.create')}}" class="btn btn-sm btn-danger">Aggiungi Progetti</a>
                    </div>
                </div>
            </div>
            <div class="col-12 flex-wrap" >
                {{--<table class="table table-striped">-}}
                    {{--<thead>
                        <th>Id</th>
                        <th>Titolo</th>
                        <th>Titolo</th>
                        <th>Titolo</th>
                    </thead>
                    <tbody>--}}
                        @foreach ($posts as $project)
                            <div class="card m-3">
                                <div><strong>Id:</strong>{{$project->id}}</div>
                                <div><strong>Titolo:</strong>{{$project->title}}</div>
                                <div><strong>Titolo:</strong>{{$project->slug}}</div>
                                <div class="m-1">
                                    <a href="{{ route('admin.posts.show', $project->slug)}}" title="Visualizza Progetto" class="btn btn-primary btn-square">
                                            <i class="fas fa-eye"></i>
                                    </a>
                                </div>
                            </div>
                            {{--<tr>
                                <td>{{$project->id}}</td>
                                <td>{{$project->title}}</td>
                                <td>{{$project->slug}}</td>
                                <td>{{--Segnaposto per azioni--}}{{--</td>
                            </tr> --}}
                        @endforeach
                    {{--</tbody>
                </table>--}}
            </div>
        </div>
    </div>
@endsection