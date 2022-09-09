@extends('layouts.landing')
{{-- @section('title')
    Landing Page
@endsection --}}

@section('content')
    @include('frontend.home.hero')
    @include('frontend.home.brands')
    @include('frontend.home.advantages')
    @include('frontend.home.features-list')
    @include('frontend.home.pricing_plan')
    @include('frontend.home.community')
@endsection
