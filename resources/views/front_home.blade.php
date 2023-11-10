@extends('front_master')
@section('title')
Welcome to Cambodia Tours
@endsection
@section('banner_page')
<div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
    <h1 class="display-3 text-white mb-3 animated slideInDown">Enjoy Your Vacation With Us</h1>
    <p class="fs-4 text-white mb-4 animated slideInDown">Tempor erat elitr rebum at clita diam amet
        diam et eos erat ipsum lorem sit</p>
    <div class="position-relative w-75 mx-auto animated slideInDown">
        <input class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Eg: Thailand">
        <button type="button" class="btn btn-primary rounded-pill py-2 px-4 position-absolute top-0 end-0 me-2"
            style="margin-top: 7px;">Search</button>
    </div>
</div>
@endsection

@section('content')
<!-- About Start -->
@include('pages.about')
<!-- About End -->
<!-- Service Start -->
@include('pages.service')
<!-- Service End -->
<!-- Destination Start -->
@include('pages.destination')
<!-- Destination Start -->
<!-- Package Start -->
@include('pages.package')
<!-- Package End -->
<!-- Booking Start -->
@include('pages.booking')
<!-- Booking Start -->
<!-- Process Start -->
@include('pages.process')
<!-- Process Start -->
<!-- Team Start -->
@include('pages.guide')
<!-- Team End -->
<!-- Testimonial Start -->
@include('pages.testimonial')
<!-- Testimonial End -->
@endsection