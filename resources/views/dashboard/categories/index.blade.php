@extends('dashboard.layout.master')

@section('title', 'Categories')

@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="d-flex align-items-baseline gap-3">
            <h4 class="fw-bold py-3 mb-4">Categories</h4>

            <button class="btn btn-sm btn-primary d-flex align-items-center py-2 fw-semibold"
                    data-bs-toggle="modal" data-bs-target="#create-modal">
                <i class="bx bx-plus"></i>
                Add New
            </button>
            @livewire('dashboard.categories.create-category')

        </div>
        <div class="card mb-4">
            <div class="card-body">
                @livewire('dashboard.categories.categories-data')
            </div>
        </div>
        @livewire('dashboard.categories.update-category')
        @livewire('dashboard.categories.delete-category')

    </div>
    <!-- / Content -->
@endsection
