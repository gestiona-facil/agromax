<flow-accordion >
    <flow-accordion-panel>
        <flow-accordion-header>{{ $titulo }}</flow-accordion-header>
        <flow-accordion-content>
            <ul>
               @if($datos->count())
            
               @foreach ( $datos as $dato)
                   <li>
                        <input type="radio" name="{{$name}}" id="{{ $dato->id }}" value="{{$dato->id}}">
                        <label for="{{$dato->id}}"> {{$dato->identificacion}} - @isset($dato->alias) {{$dato->alias}} @endisset </label>
                   </li>
               @endforeach
               @else
                    <li>No hay registros</li>
               @endif
            </ul>
        </flow-accordion-content>
    </flow-accordion-panel>
</flow-accordion>