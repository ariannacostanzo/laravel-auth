@extends('layouts.app')

@section('content')

@section('title', 'Projects')

<h1>Progetti</h1>
<hr>
<table class="table table-hover table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Titolo</th>
      <th scope="col">Creato</th>
      <th scope="col">Modificato</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    @forelse ($projects as $project)
        
    <tr>
      <th scope="row">{{$project->id}}</th>
      <td>{{$project->title}}</td>
      <td>{{$project->created_at}}</td>
      <td>{{$project->updated_at}}</td>
      <td class="d-flex justify-content-end gap-3">
        <a href="{{route('admin.projects.show', $project->id)}}" class="btn btn-primary"><i class="fa-regular fa-eye"></i></a>
        <a href="{{route('admin.projects.edit', $project->id)}}" class="btn btn-warning"><i class="fa-solid fa-pen"></i></a>
        <form action="{{route('admin.projects.destroy', $project->id)}}", method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger"><i class="fa-regular fa-trash-can"></i></button>
        </form>
      </td>
    </tr>
    @empty
    <tr>
        <td colspan="5">Non ci sono progetti da vedere</td>
    </tr>
    @endforelse
    
  </tbody>
</table>



@endsection