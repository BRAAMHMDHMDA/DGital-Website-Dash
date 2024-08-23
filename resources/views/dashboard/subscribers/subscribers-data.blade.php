<div>
    <div class="mb-3">
        <input type="text" class="form-control w-25" placeholder="Search" wire:model.live='search'>
    </div>

    <div class="table-responsive text-nowrap">
        @if (count($data) > 0)
            <table class="table">
                <thead>
                <tr>
                    <th width="">Email</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                @foreach ($data as $record)
                    <tr>
                        <td>
                            <strong>{{ $record->email }}</strong>
                        </td>
                        <td>
                            <a class="d-flex align-items-center gap-1 text-danger"
                               href="#"
                               wire:click.prevent="$dispatch('subscriberDelete', { id: {{ $record->id }} })">
                                <i class="bx bx-trash me-1"></i>
                            </a>
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
