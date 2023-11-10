@extends('front_master')
@section('title')
Services of Cambodia Tours
@endsection
@section('banner_page')
<div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
    <h1 class="display-3 text-white animated slideInDown">Services</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item text-white active" aria-current="page">Service</li>
        </ol>
    </nav>
</div>
@endsection

@section('content')
<!-- About Start -->
@include('pages.service')
<!-- About End -->

<!-- Team Start -->
@include('pages.testimonial')
<!-- Team End -->

@endsection