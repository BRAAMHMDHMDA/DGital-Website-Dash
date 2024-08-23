@extends('dashboard.layout.master')

@section('title', 'Counters')

@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="d-flex align-items-baseline gap-3">
            <h4 class="fw-bold py-3 mb-4">Counters</h4>

            <button class="btn btn-sm btn-primary d-flex align-items-center py-2 fw-semibold"
                    data-bs-toggle="modal" data-bs-target="#create-modal">
                <i class="bx bx-plus"></i>
                Add New
            </button>
            @livewire('dashboard.counters.create-counter')
        </div>

        <div class="card mb-4">
            <div class="card-body">
                @livewire('dashboard.counters.counters-data')
            </div>
        </div>
        @livewire('dashboard.counters.update-counter')
        @livewire('dashboard.counters.delete-counter')
    </div>
    <!-- / Content -->
@endsection
