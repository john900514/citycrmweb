<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
@if (config('backpack.base.meta_robots_content'))
<meta name="robots" content="{{ config('backpack.base.meta_robots_content', 'noindex, nofollow') }}">
@endif

{{-- Encrypted CSRF token for Laravel, in order for Ajax requests to work --}}
<meta name="csrf-token" content="{{ csrf_token() }}" />
<link rel="icon" href="https://capeandbay.com/wp-content/uploads/2019/11/cropped-favicon-32x32.png" sizes="32x32">
<link rel="icon" href="https://capeandbay.com/wp-content/uploads/2019/11/cropped-favicon-192x192.png" sizes="192x192">
<link rel="apple-touch-icon-precomposed" href="https://capeandbay.com/wp-content/uploads/2019/11/cropped-favicon-180x180.png">

<title>
  {{ isset($title) ? $title.' :: '.config('backpack.base.project_name').' Admin' : config('backpack.base.project_name').' Admin' }}
</title>

<link rel="stylesheet" href="{!! asset('css/app.css') !!}"/>

@yield('before_styles')
@stack('before_styles')

<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

<style>
    @media screen {
        #app {
            width: 100%;
        }

        .c-header-brand.a {
            width: 50%;
            justify-content: left;
        }
        .c-header-brand.img {
            width: 65%;
            object-fit: contain;
        }

        .c-body .c-main {
            margin: 0 3%;
        }

        .c-dark-theme .img-light {
            display: none;
        }

        .c-dark-theme .img-dark {
            display: flex;
        }

        .img-light {
            display: flex;
            transition: 0.5s;
        }

        .img-dark {
            display: none;
        }

        .c-subheader .breadcrumb {
            background-color: inherit;
        }

        footer {
            background-color: unset;
        }
    }

    @media screen and (max-width: 999px) {
        .content-header .small-h1 {
            font-size: 45%;
        }
    }

    @media screen and (min-width: 1000px) {
        .content-header .small-h1 {
            font-size: 55%;
        }
    }
</style>
<!-- BackPack Base CSS -->
<style>
    .c-dark-theme .select2-selection,
    .c-dark-theme .select2-search__field {
        color: #e1e1e1 !important;
        background-color: hsla(0,0%,100%,.1) !important;
        border-color: hsla(0,0%,100%,.15) !important;
    }

    .c-dark-theme .select2-selection__rendered {
        color: #e1e1e1 !important;
    }

    .c-dark-theme .select2-dropdown.select2-dropdown--below,
    .c-dark-theme .select2-results__option {
        color: #e1e1e1 !important;
        background-color: #495057 !important;
    }

    .c-dark-theme .select2-results__option--highlighted {
        background-color: #0a0b18 !important;
    }

    .select2-selection.select2-selection--single {
        height: calc(1.6em + 0.75rem + 2px) !important;
    }
</style>


@yield('after_styles')
@stack('after_styles')
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
