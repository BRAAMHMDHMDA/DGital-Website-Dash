
<button type="submit" class="btn btn-danger d-flex align-items-center" wire:click="submit" wire:loading.attr="disabled">
    <span class="d-flex align-items-center gap-1">
        {{$label ?? 'Delete'}}
        <i class='bx bx-x'></i>
    </span>
    <span class="spinner-border spinner-border-sm text-white ms-1"
          role="status" wire:loading wire:target="submit"
    >
                    <span class="visually-hidden">Loading...</span>
    </span>
</button>
