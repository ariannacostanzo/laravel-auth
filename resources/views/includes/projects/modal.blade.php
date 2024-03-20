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
                <form action="{{ route('admin.projects.destroy', $project->id) }}", method="POST" class="delete-form">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-primary">Conferma</button>
                </form>
            </div>
        </div>
    </div>
</div>
