@extends('layouts.admin')
@section('content')
    <div class="container mt-5 ">
        <div class="text-end">
            <a class="btn btn-success" href="{{route('admin.projects.create')}}">crea</a>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">description</th>
                    <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <th scope="row">{{$project->id}}</th>
                        <td>{{$project->title}}</td>
                        <td>{{$project->created_at}}</td>
                        <td><a class="btn btn-primary" href="{{route('admin.projects.show',['project'=>$project->slug ])}}">dettagli</a></td>
                @endforeach


                </tr>

            </tbody>
        </table>
    </div>
@endsection
