@extends('layouts.landing')
@section('title')
    Landing Page
@endsection

@section('content')
    @include('frontend.home.hero')
    @include('frontend.home.brands')
    @include('frontend.home.advantages')
    @include('frontend.home.pricing_plan')
    @include('frontend.home.contact_us')
@endsection
