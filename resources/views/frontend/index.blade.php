@extends('frontend.layout.master')

@section('content_title')
    <h1 class="primary-text">MM Student Portal</h1>
@endsection

@section('content')
    <div class="row mt-5 d-flex align-items-center">
        <div class="col-lg-6">
            <p class="text-white my-5 fs-4">
                MM Student Portal is an access point to all the university aiming at Myanmar
                public and
                private universities to ensure the integrity of the universities while limiting the fraud, identify
                theft, of being a student.</p>
            <div class="d-flex flex-wrap align-items-center col-gap-2">
                <a href="#" class="primary-text fw-bold text-underline">Learn About ID Management</a>
                <a href="#" class="custom-btn-primary">Contact Us</a>
            </div>
        </div>
        <div class="col-lg-6 d-flex justify-content-center mt-5">
            <img class="w-75 border rounded" src="{{ asset('asset/img/undraw_Educator_re_ju47.png') }}">
        </div>
    </div>
@endsection
