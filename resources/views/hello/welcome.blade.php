<html>
    <body>
        {{-- output (echo) dados escaped --}}
        {{ $message}}
        {{-- output (echo) dados unescaped --}}
        {!! $message !!}

        @if($name == 'Diogo')
            Bom dia Diogo
        @elseif ($name == 'Jose')
            Bom dia Jose
        @else 
            Bom dia desconhecido
        @endif
    </body>
</html>