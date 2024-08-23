<x-dashboard.form.modal id="show-modal" title="Show Message" class="border-bottom">

    <div class="row px-5 py-4 mt-4">
        <div class="row mb-3">
            <div class="col-3">
                <strong>Name :</strong>
            </div>
            <div class="col-8">
                {{$message?->name}}
            </div>
        </div>
        <hr />
        <div class="row mb-3">
            <div class="col-3">
                <strong>Email :</strong>
            </div>
            <div class="col-8">
                {{$message?->email}}
            </div>
        </div>
        <hr />
        <div class="row mb-3">
            <div class="col-3">
                <strong>Subject :</strong>
            </div>
            <div class="col-8">
                {{$message?->subject}}
            </div>
        </div>
        <hr />

        <div class="row mb-3">
            <div class="col-3">
                <strong>Message :</strong>
            </div>
            <div class="col-8">
                {{$message?->message}}
            </div>
        </div>
    </div>

</x-dashboard.form.modal>
