@extends('layouts.app')

@section('title', 'Home')
@section('content')

<h1>I nostri progetti</h1>
<hr>
<div class="row">
        @forelse ($projects as $project)
        <div class="col-3 my-3">

            <div class="card">
                <img src="{{ $project->image }}" class="card-img-top" alt="{{$project->title}}">
                <div class="card-body">
                    <h5 class="card-title">{{$project->title}}</h5>
                    <p class="card-text">{{$project->getAbstract()}}</p>
                    <a href="#" class="btn btn-primary">Vedi dettagli</a>
                </div>
            </div>
        </div>
        @empty
            <h5>Non ci sono progetti</h5>
        @endforelse
    
</div>
@endsection