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
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                @foreach ($data as $record)
                    <tr class="@if($record->status==='0') bg-lighter text-primary fw-bold @endif">
                            <td class="cursor-pointer" wire:click.prevent="$dispatch('messageShow', { id: {{ $record->id }} })">
                                {{ $record->name }}
                            </td>
                            <td class="cursor-pointer" wire:click.prevent="$dispatch('messageShow', { id: {{ $record->id }} })">
                                {{ $record->email }}
                            </td>
                            <td class="cursor-pointer" wire:click.prevent="$dispatch('messageShow', { id: {{ $record->id }} })">
                                {{ $record->subject }}
                            </td>
                            <td>
                                <div class="d-flex">
                                    <a class="d-flex align-items-center gap-1 text-danger" href="#"
                                       wire:click.prevent="$dispatch('messageDelete', { id: {{ $record->id }} })">
                                        <i class="bx bx-trash me-1 icon-hover fs-4"></i>
                                    </a>
                                    <a class="d-flex align-items-center gap-1 text-info" href="#"
                                       wire:click.prevent="$dispatch('messageMarkAs', { id: {{ $record->id }} })">
                                        @if($record->status==='0')
                                            <i class='bx bx-show me-1 icon-hover fs-4'
                                               data-bs-toggle="tooltip" data-bs-offset="0,4"
                                               data-bs-placement="right" data-bs-html="true"
                                               data-bs-original-title="<span>Mark As Read</span>">
                                            </i>
                                        @else
                                            <i class='bx bx-low-vision me-1 icon-hover fs-4'
                                               data-bs-toggle="tooltip" data-bs-offset="0,4"
                                               data-bs-placement="right" data-bs-html="true"
                                               data-bs-custom-class="tooltip-info"
                                               data-bs-original-title="<span>Mark As UnRead</span>">
                                            </i>
                                        @endif
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
