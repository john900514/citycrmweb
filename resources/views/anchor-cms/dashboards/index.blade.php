@if(array_key_exists('layout', $config))
    @switch($config['layout'])
        @case('sup')
            <h1> not ready </h1>
        @break
        @default
            @include('anchor-cms.dashboards.default')
    @endswitch
@endif
