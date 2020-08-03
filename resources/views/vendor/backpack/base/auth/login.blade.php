@extends('backpack::layout_guest')

@section('header')
    <div class="logo-header-section">
        <div class="inner-logo-header">
            <img v-if="'{!! config('backpack.base.skin_theme') !!}' === 'dark'" src="https://city-crm.s3.amazonaws.com/CityCRM-White.png" />
            <img v-if="'{!! config('backpack.base.skin_theme') !!}' === 'light'" src="https://city-crm.s3.amazonaws.com/CityCRM-Black.png" />
        </div>
    </div>
@endsection

@section('content')
    <div class="">
        <div class="col-md-12 col-md-offset-12">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                    <?php session()->forget('status'); ?>
                </div>
            @endif

                <login-component
                    csrf="{!! csrf_token() !!}"
                    login-action="{{ route('backpack.auth.login') }}"
                    username-error="{!!  $errors->has('username')  ? ' has-error' : ''  !!}"
                    password-error="{!!  $errors->has('password') ? ' has-error' : '' !!}"
                    client-error="{!!  $errors->has('client-login') ? ' has-error' : '' !!}"
                ></login-component>
            @if (backpack_users_have_email())
                <div class="text-center m-t-10"><a href="{{ route('backpack.auth.password.reset') }}">{{ trans('backpack::base.forgot_your_password') }}</a></div>
            @endif
            @if (config('backpack.base.registration_open'))
                <div class="text-center m-t-10"><a href="{{ route('backpack.auth.register') }}">{{ trans('backpack::base.register') }}</a></div>
            @endif
        </div>
    </div>
@endsection

@section('before_scripts')
    <style>
        @media screen {
            html, body {
                width: 100%;
                height: 100%;
                margin: 0;
            }

            .container {
                height: 100%;
            }

            .inner-container {
                display: flex;
                flex-flow: column;
                justify-content: center;
                align-items: center;
                height: 100%;
            }

            .content {
                width: 100%;
                height: 65%;
            }

            .inner-content {
                display: flex;
                flex-flow: column;
            }

            .logo-header-section {
                width: 100%;
                height: 35%;
            }

            .inner-logo-header {
                height: 100%;
                display: flex;
                flex-flow: column;
                justify-content: center;
                margin: 0 15%;
            }

            .inner-logo-header img {
                width: 100%;
            }

            .form-control, .btn.btn-block.btn-primary {
                height: 3em;
                font-size: 1.75em;
            }

            .control-label, .checkbox label, .text-center.m-t-10 {
                font-size: 1.75em;
            }
        }

        @media screen and (min-width: 1000px) {
            .inner-content {
                margin-left: 25%;
                margin-right: 25%;
            }
        }
    </style>
@endsection
