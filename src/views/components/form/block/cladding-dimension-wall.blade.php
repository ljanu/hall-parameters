{{-- componet cladding dimension wall --}}
@props([
    "colorWall",
    "roofType",
])
<fieldset class = "flex flex-col md:flex-row pt-2" >
    <legend class = "m-title flex flex-row" > {{$colorWall}} stěna</legend >

    {{-- img --}}
    @if ($colorWall == 'yellow' || $colorWall =='green')

        <img
                src = "{{asset("images/hall-parameters/$colorWall-$roofType.svg")}}"
                alt = "{{$colorWall}} gable"
                width = "70"
        >

    @else

        <img
                src = "{{asset("images/hall-parameters/$colorWall-wall.svg")}}"
                alt = "{{$colorWall}} wall"
                width = "70"
        >
    @endif


    {{-- width --}}
    <div >

        <label for = "{{$colorWall}}_width" >šířka</label >
        <input
                class = "w-28"
                type = "number"
                id = "{{$colorWall}}_width"
                name = "{{$colorWall}}_width"
                value = ""
                step = "0.01"
                min = "0" >

    </div >

    {{-- length --}}
    <div >

        <label for = "{{$colorWall}}length" >výška</label >
        <input
                class = "w-28"
                type = "number"
                id = "{{$colorWall}}length"
                name = "{{$colorWall}}length"
                value = ""
                step = "0.01"
                min = "0" >

    </div >

</fieldset >