@extends('layouts.app')

@section('content')

@section('title', 'Projects')
    

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
      <td></td>
    </tr>
    @empty
    <tr>
        <td colspan="5">Non ci sono progetti da vedere</td>
    </tr>
    @endforelse
    
  </tbody>
</table>



@endsection