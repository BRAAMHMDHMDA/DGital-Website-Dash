@extends('dashboard.layout.master')

@section('title', 'Messages')

@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="d-flex align-items-baseline gap-3">
            <h4 class="fw-bold py-3 mb-4">Messages</h4>
        </div>

        <div class="card mb-4">
            <div class="card-body">
                @livewire('dashboard.messages.messages-data')
            </div>
        </div>
        @livewire('dashboard.messages.show-message')
        @livewire('dashboard.messages.delete-message')
    </div>
    <!-- / Content -->
@endsection
