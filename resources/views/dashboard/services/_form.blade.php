<form wire:submit.prevent='submit'>
    <div class="modal-body">
        <div class="col mb-4">
            <x-dashboard.form.input name="name" label="Name"/>
        </div>
        <div class="col mb-4">
            <x-dashboard.form.input name="icon" label="Icon"/>
        </div>
        <div class="col mb-4">
            <x-dashboard.form.textarea name="description" label="Description"/>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
            Close
        </button>
        <x-dashboard.form.btn-submit label="Save"/>
    </div>
</form>
