<div>
    <div class="mb-3">
        <input type="text" class="form-control w-25" placeholder="Search" wire:model.live='search'>
    </div>

    <div class="table-responsive text-nowrap">
        @if (count($data) > 0)
            <table class="table">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Icon</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                @foreach ($data as $record)
                    <tr>
                        <td>
                            <strong>{{ $record->name }}</strong>
                        </td>
                        <td><i class="{{ $record->icon }}"></i></td>
                        <td>
                            <div class="d-flex">
                                <a class="d-flex align-items-center gap-1 text-dark" href="#"
                                   wire:click.prevent="$dispatch('serviceUpdate', { id: {{ $record->id }} })">
                                    <i class="bx bx-edit-alt icon-hover me-1 fs-4"></i>
                                </a>
                                <a class="d-flex align-items-center gap-1 text-danger" href="#"
                                   wire:click.prevent="$dispatch('serviceDelete', { id: {{ $record->id }} })">
                                    <i class="bx bx-trash me-1 icon-hover fs-4"></i>
                                </a>
                               <a class="d-flex align-items-center gap-1 text-info" href="#"
                                  wire:click.prevent="$dispatch('serviceShow', { id: {{ $record->id }} })">
                                   <i class='bx bx-show me-1 icon-hover fs-4'></i>
                               </a>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            {{ $data->links() }}
        @else
            <div class="alert alert-danger mt-3">No results found</div>
        @endif
    </div>
</div>
