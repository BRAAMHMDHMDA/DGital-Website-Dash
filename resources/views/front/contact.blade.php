@extends('front.layout.master')
@section('page-title','Contact')
@section('header-content')
    <div class="py-5 bg-primary hero-header">
        <div class="container my-5 py-5 px-lg-5">
            <div class="row g-5 py-5">
                <div class="col-12 text-center">
                    <h1 class="text-white animated slideInDown">Contact</h1>
                    <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Contact</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <!-- Contact Start -->
    <div class="py-5">
        <div class="container py-5 px-lg-5">
            <div class="wow fadeInUp" data-wow-delay="0.1s">
                <p class="section-title text-secondary justify-content-center"><span></span>Contact Us<span></span></p>
                <h1 class="text-center mb-5">Contact For Any Query</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="wow fadeInUp" data-wow-delay="0.3s">
                        @livewire('front.create-message')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
