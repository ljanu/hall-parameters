{{-- componet fieldset  --}}

@props([
    "legend",
    "content"
])

<fieldset >
    <legend class = "m-title" >{{$legend}}</legend >

    {{-- wrap basic items --}}
    <div class = "m-5" >

        {{$content}}

    </div >
</fieldset >