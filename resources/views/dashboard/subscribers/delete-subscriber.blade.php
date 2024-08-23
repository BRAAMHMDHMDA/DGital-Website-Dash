<x-dashboard.form.modal id="delete-modal" title="Delete Subscriber">
    <form wire:submit.prevent='submit'>
        <div class="modal-body">
            Are You Sure you want to delete this record ?
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                Close
            </button>
            <x-dashboard.form.btn-delete />
        </div>
    </form>
</x-dashboard.form.modal>
