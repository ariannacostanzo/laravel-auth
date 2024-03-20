@extends('layouts.app')

@section('content')

@section('title', "Project $project->id")
    

<h1>{{$project->title}}</h1>
<hr>
<div class="row">
    <div class="col-3">
        <img src="{{ $project->image ? $project->image : 'https://bub.bh/wp-content/uploads/2018/02/image-placeholder.jpg' }}" class="card-img-top" alt="{{$project->title}}" class="img-fluid">
    </div>
    <div class="col">{{$project->description}}</div>
</div>
<div class="row my-5">
    <div class="col-4"><strong>Creato:</strong> {{$project->getDate($project->created_at, 'd-m-Y H:m:s')}} </div>
    <div class="col-4"><strong>Modificato:</strong> {{$project->getDate($project->updated_at, 'd-m-Y H:m:s')}}</div>
    <div class="col-4">
        <div class="d-flex justify-content-end gap-3">
            <a href="{{route('admin.projects.index')}}" class="btn btn-primary">Torna alla lista</a>
          <a href="{{route('admin.projects.edit', $project->id)}}" class="btn btn-warning"><i class="fa-solid fa-pen me-2"></i>Modifica</a>
          <form action="{{route('admin.projects.destroy', $project->id)}}", method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger"><i class="fa-regular fa-trash-can me-2"></i>Cancella</button>
          </form>
        </div>
    </div>
</div>

@endsection