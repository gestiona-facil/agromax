@extends('main')

@section('app')

<flow-carousel> 
    const props = defineProps({
        controls: {
        type: Boolean,
        default: true,
        },
    })
</flow-carousel>
@endsection
<!--eso es tal cual lo que da el componente en flowbite-vue-->