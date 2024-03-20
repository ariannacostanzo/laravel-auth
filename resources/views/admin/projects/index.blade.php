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
            <th>
                <div class="d-flex justify-content-end gap-3">
                    <a href="" class="btn btn-secondary">
                        <i class="fa-solid fa-trash-can me-2"></i>
                        {{-- todo rotta cestino --}}
                        Vedi Cestino
                    </a>
                    <a href="{{ route('admin.projects.create') }}" class="btn btn-success">
                        <i class="fa-solid fa-plus me-2"></i>
                        Crea nuovo
                    </a>
                </div>
            </th>
        </tr>
    </thead>
    <tbody>
        @forelse ($projects as $project)
            {{-- modal --}}
            <div class="modal fade" id="modal{{ $project->id }}" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="modal{{ $project->id }}Label">
                              Sei sicuro di voler eliminare questo progetto?
                              </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            {{ $project->title }}
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                            <form action="{{ route('admin.projects.destroy', $project->id) }}", method="POST"
                                class="delete-form">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-primary">Conferma</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {{-- modal --}}
            <tr>
                <th scope="row">{{ $project->id }}</th>
                <td>{{ $project->title }}</td>
                <td>{{ $project->getDate($project->created_at) }}</td>
                <td>{{ $project->getDate($project->updated_at) }}</td>
                <td>
                    <div class="d-flex justify-content-end gap-3">
                        <a href="{{ route('admin.projects.show', $project->id) }}" class="btn btn-primary"><i
                                class="fa-regular fa-eye"></i></a>
                        <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-warning"><i
                                class="fa-solid fa-pen"></i></a>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                            data-bs-target="#modal{{ $project->id }}">
                            <i class="fa-regular fa-trash-can"></i></button>
                        </button>
                    </div>
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
