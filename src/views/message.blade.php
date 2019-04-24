@if(session()->has('noty.messages'))
    <script type="text/javascript">
        (function () {
            // Noty settings
            Noty.overrideDefaults({
                layout: '{{ (!empty(session('noty.config.position')) ? session('noty.config.position') : config('laravel-noty.position'))  }}',
                theme: '{{ (!empty(session('noty.config.theme')) ? session('noty.config.theme') : config('laravel-noty.theme'))  }}',
                animation: {
                    open: '{{ (!empty(session('noty.config.open')) ? session('noty.config.open') : config('laravel-noty.animation.open')) }}',
                    close: '{{ (!empty(session('noty.config.close')) ? session('noty.config.close') : config('laravel-noty.animation.close')) }}'
                },
                progressBar: {{ (!empty(session('noty.config.progressBar')) ? session('noty.config.progressBar') : config('laravel-noty.progressBar')) }},
                closeWith: [
                    @if(!empty(session('noty.config.closeWith')))
                            @foreach(session('noty.config.closeWith') as $key => $close)
                                 {{ ($key > 0 ? ',' : null) }}
                                  '{{ $close }}'
                             @endforeach
                    @else
                         @foreach( config('laravel-noty.closeWith') as $key => $close)
                            {{ ($key > 0 ? ',' : null) }}
                            '{{ $close }}'
                         @endforeach
                    @endif
                ],
                id:  {!! (!empty(session('noty.config.id')) ? "'".session('noty.config.id')."'" : false) !!},
                force: {{ (!empty(session('noty.config.force')) ? session('noty.config.force') : config('laravel-noty.force')) }},
                queue: 'global',
                killer: {{  (!empty(session('noty.config.killer')) ? session('noty.config.killer') : config('laravel-noty.killer')) }},
                container: {{ (!empty(session('noty.config.container')) ? session('noty.config.container') : config('laravel-noty.container')) }}
            });

            @foreach (session('noty.messages') as $item)
                // New Noty instance
                var noty = new Noty({
                    text: '{{ $item['text'] }}',
                    type: '{{ $item['type'] }}',
                    timeout: '{{ (!empty(session('noty.config.timeout')) ? session('noty.config.timeout') : config('laravel-noty.config.timeout')) }}',
                    {{--@if(session('noty.config.buttons') != 'false' || config('noty.config.buttons') != 'false')--}}
                        {{--buttons: [ {{ (!empty(session('noty.config.buttons')) ? session('noty.config.buttons') : config('laravel-noty.buttons')) }}  ]--}}
                    {{--@endif--}}
                }).show();
            @endforeach

        })();
    </script>
@endif