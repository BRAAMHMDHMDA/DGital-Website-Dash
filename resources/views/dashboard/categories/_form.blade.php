<form wire:submit.prevent='submit'>
    <div class="modal-body">
        <div class="row g-2">
            <div class="col mb-0">
                <x-dashboard.form.input name="name" label="Name"/>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
            Close
        </button>
        <x-dashboard.form.btn-submit label="Save"/>
    </div>
</form>
