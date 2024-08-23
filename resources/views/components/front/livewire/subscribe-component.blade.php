<form wire:submit.prevent="submit">
    <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5"
           type="text" placeholder="Enter Your Email"
           style="height: 48px;"
           wire:model="email"
    />
    @error('email')
        <div class="alert alert-danger rounded-pill py-1 w-75 m-auto mt-2 alert-dismissible" style="font-size: 12px">
            {{$message}}
            <button type="button" class="btn-close" style="padding: 0.5rem;width:2rem" data-bs-dismiss="alert" aria-label="Close">
            </button>
        </div>
    @enderror
    @session('message')
        <div class="alert alert-success rounded-pill py-1 w-75 m-auto mt-2 alert-dismissible" style="font-size: 12px">
            {{session('message')}}
            <button type="button" class="btn-close" style="padding: 0.5rem;width:2rem" data-bs-dismiss="alert" aria-label="Close">
            </button>
        </div>
    @endsession
    <button type="submit" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"  wire:loading.attr="disabled">
        <i class="fa fa-paper-plane text-primary fs-4"></i>
    </button>
</form>
