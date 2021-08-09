{{-- componet cladding dimension wall --}}
@props([
    "colorWall",
    "roofType",
])

<fieldset class="flex flex-col md:flex-row" >
    <legend class = "m-title" >{{$colorWall}} stěna</legend >

    {{-- img --}}
    <img
            src = "{{asset("images/hall-parameters/$colorWall-$roofType.svg")}}"
            alt = "yellow gable"
            width="70"
    >
    
    {{-- width --}}
    <div>
        <label for = "{{$colorWall}}_width" >šířka</label >
        <input
                class = "w-28"
                type = "number"
                id = "{{$colorWall}}_width"
                name = "{{$colorWall}}_width"
                value = ""
                step="0.01"
                min = "0" >
    </div>

    {{-- length --}}
    <div>
        <label for = "{{$colorWall}}length" >výška</label >
        <input
                class = "w-28"
                type = "number"
                id = "{{$colorWall}}length"
                name = "{{$colorWall}}length"
                value = ""
                step="0.01"
                min = "0" >
    </div>

</fieldset >