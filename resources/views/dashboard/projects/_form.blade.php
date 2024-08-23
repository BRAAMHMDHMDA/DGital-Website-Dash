<form wire:submit.prevent='submit'>
    <div class="modal-body">
        <div class="row g-2 mb-4">
            <div class="col mb-0">
                <x-dashboard.form.input name="name" label="Name"/>
            </div>
            <div class="col mb-0">
                <x-dashboard.form.input name="link" label="Link" type="url"/>
            </div>
        </div>
        <div class="row g-2 mb-4">
            <div class="col mb-0">
                <x-dashboard.form.textarea name="description" label="Description"/>
            </div>
        </div>
        <div class="row g-2 mb-4">
            <div class="col mb-0">
                <x-dashboard.form.input label="Image" class="" type="file" name="image"/>
            </div>
            <div class="col mb-0">
                <x-dashboard.form.select label="Category" name="category_id" :options="$categories"/>
            </div>
        </div>
        <div class="row g-2 mb-2">
            <div class="col">
                @if (is_null($image) && !is_null($old_image))
                    <img src="{{$old_image}}" style="max-width: 100%;height: 200px">
                @else
                    <img src="{{$image?->temporaryUrl()}}" style="max-width: 100%;height: 200px">
                @endif
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
