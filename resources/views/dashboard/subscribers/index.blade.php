@extends('dashboard.layout.master')

@section('title', 'Subscribers')

@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="d-flex align-items-baseline gap-3">
            <h4 class="fw-bold py-3 mb-4">Subscribers</h4>
        </div>
        <div class="card mb-4">
            <div class="card-body">
                @livewire('dashboard.subscribers.subscribers-data')
            </div>
        </div>
        @livewire('dashboard.subscribers.delete-subscriber')

    </div>
    <!-- / Content -->
@endsection
