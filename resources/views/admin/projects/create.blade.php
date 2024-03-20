@extends('layouts.app')

@section('content')

@section('title', 'Create Projects')


<h1>Crea un nuovo progetto</h1>
<hr>



<form action="{{route('admin.projects.store')}}" method="POST">
<div class="row">
        @csrf
        <div class="col-6">
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control @error('title') is-invalid @elseif(old('title', '')) is-valid  @enderror" id="title" name="title" placeholder="Il mio progetto" value="{{old('title', $project->title)}}">
                @error('title')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
        </div>
        <div class="col-6">
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control" id="slug" disabled>
            </div>
        </div>
        <div class="col-6">
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control @error('description') is-invalid @elseif(old('description', '')) is-valid @enderror" id="description" name="description" rows="6">{{old('description', $project->description)}}</textarea>
                @error('description')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
        </div>
        <div class="col-5">
            <div class="mb-3">
                <label for="image" class="form-label">Immagine</label>
                <input class="form-control @error('image') is-invalid @elseif(old('image', '')) is-valid @enderror" id="image" name="image"  placeholder="https:// o http://" value="{{old('image', $project->image)}}">
                @error('image')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
        </div>
        <div class="col-1">
            <div class="mb-3">
                <img src="https://bub.bh/wp-content/uploads/2018/02/image-placeholder.jpg" id="preview" class="img-fluid">
            </div>
        </div>
        <div class="col-6"></div>
        <div class="col-6 d-flex justify-content-end">
            <div class="mt-3 d-flex gap-3">
                <a href="{{route('admin.projects.index')}}" class="btn btn-primary">Torna alla lista</a>
                <button class="btn btn-success"><i class="fa-solid fa-plus me-2"></i>Crea</button>
            </div>
        </div>
    </div>
</form>
@endsection
