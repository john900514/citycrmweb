@extends('city-web.layouts.default')

@section('before-styles')

@endsection

@section('content')
    <div class="container">
        <div class="post">
            <!-- Hero Banner -->
            @include('city-web.pages.welcome.hero')

            <div class="vc_row-full-width vc_clearfix"></div>

            <!-- Alterntive Sales Pitch Section -->
            @include('city-web.pages.welcome.alt-pitch-section')

            <div class="vc_row-full-width vc_clearfix"></div>

            @include('city-web.pages.welcome.alt-pitch2')

            <div class="vc_row-full-width vc_clearfix"></div>

            @include('city-web.pages.welcome.skinny-cta')
            @include('city-web.pages.welcome.blog-subscribe')

            <div class="vc_row-full-width vc_clearfix"></div>

            @include('city-web.pages.welcome.sweet-blog-gallery')

            <div class="clr">

            </div>
        </div>
    </div>
@endsection

@section('after-scripts')

@endsection
