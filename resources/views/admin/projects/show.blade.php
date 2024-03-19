@extends('layouts.app')

@section('content')

@section('title', "Project $project->id")
    

<h1>{{$project->title}}</h1>
<hr>
<div class="row">
    <div class="{{ $project->image ? 'col-2' : '' }}">
        <img src="{{ $project->image }}" alt="{{$project->title}}"></div>
    <div class="col">{{$project->description}}</div>
</div>
<div class="row my-5">
    <div class="col-4"><a href="{{route('admin.projects.index')}}">Torna indietro</a></div>
    <div class="col-4"><strong>Creato:</strong> {{$project->created_at}} </div>
    <div class="col-4"><strong>Modificato:</strong> {{$project->updated_at}}</div>
</div>

@endsection