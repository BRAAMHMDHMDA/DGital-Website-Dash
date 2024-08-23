@extends('front.layout.master')
@section('page-title','index')
@section('header-content')
    <div class=" bg-primary hero-header" id="home">
        <div class="container px-lg-5">
            <div class="row g-5 align-items-end">
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="text-white mb-4 animated slideInDown">A Digital Agency Of Inteligents & Creative People</h1>
                    <p class="text-white pb-3 animated slideInDown">Tempor rebum no at dolore lorem clita rebum rebum ipsum rebum stet dolor sed justo kasd. Ut dolor sed magna dolor sea diam. Sit diam sit justo amet ipsum vero ipsum clita lorem</p>
                    <a href="" class="btn btn-secondary py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Read More</a>
                    <a href="" class="btn btn-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">Contact Us</a>
                </div>
                <div class="col-lg-6 text-center text-lg-start">
                    <img class="img-fluid animated zoomIn" src="{{ asset('front_assets/img/hero.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')

    <x-front.features-component />

    <x-front.about-us-component />

    <x-front.counters-component number="4"/>

    <x-front.services-component number="6"/>

    <x-front.newsletter-component />

    <x-front.projects-component />

    <x-front.testimonials-component />

    <x-front.team-component />

@endsection
