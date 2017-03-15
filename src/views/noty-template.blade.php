@if(session()->has('noty'))
    <script type="text/javascript">
        noty({
            text: '{!! session('noty.message') !!}',
            layout: '{{ session('noty.position') or config('laravel-noty.position') }}',
            theme: '{{ config('laravel-noty.theme')  }}',
            type: '{{ session('noty.type') or config('laravel-noty.type') }}',
            animation: {
                open: 'animated {{ session('noty.open') or config('laravel-noty.animation.open') }}',
                close: 'animated {{ session('noty.close') or config('laravel-noty.animation.close') }}'
            },
            progressBar: {{ config('laravel-noty.progressbar') }},
            timeout: {{ session('noty.duration') or config('laravel-noty.timeout') }}
        });
    </script>
@endif