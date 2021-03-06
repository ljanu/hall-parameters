{{-- componet cladding dimension wall --}}
@props([
    "colorWall",
    "roofType",
])
<fieldset class = "flex flex-col md:flex-row pt-2" >
    <legend class = "m-title flex flex-row" >
        {{trans("t_h_p.text.$colorWall")}}
        {{trans("t_h_p.text.wall")}}
    </legend >

    {{-- img --}}
        <img
                src = "{{asset("images/hall-parameters/$colorWall-wall-dimension.svg")}}"
                alt = "{{$colorWall}} wall"
                width = "70"
        >


    {{-- width --}}
    <div >

        <label for = "{{$colorWall}}_width" >{{trans("t_h_p.text.width")}}</label >
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

        <label for = "{{$colorWall}}_length" >{{trans("t_h_p.text.height")}}</label >
        <input
                class = "w-28"
                type = "number"
                id = "{{$colorWall}}_length"
                name = "{{$colorWall}}_length"
                value = ""
                step = "0.01"
                min = "0" >

    </div >

</fieldset >