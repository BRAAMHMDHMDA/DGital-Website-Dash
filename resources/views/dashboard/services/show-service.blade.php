<x-dashboard.form.modal id="show-modal" title="Show Service" class="border-bottom">

    <div class="row px-5 py-4 mt-4">
        <div class="row mb-3">
            <div class="col-3">
                <strong>Name :</strong>
            </div>
            <div class="col-8">
                {{$service?->name}}
            </div>
        </div>
        <hr />
        <div class="row mb-3">
            <div class="col-3">
                <strong>Icon :</strong>
            </div>
            <div class="col-8">
                <i class="{{$service?->icon}}"></i>
            </div>
        </div>
        <hr />

        <div class="row mb-3">
            <div class="col-3">
                <strong>Description :</strong>
            </div>
            <div class="col-8">
                {{$service?->description}}
            </div>
        </div>
    </div>

</x-dashboard.form.modal>
