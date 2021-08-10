{{-- components gable wall --}}

@props([
    "colorWall",
    "roofType",
])


<fieldset class="flex flex-row justify-between" >

    <legend class="m-title" >{{trans("t_h_p.text.gable_wall")}}</legend >

    <img
            src = " {{asset("images/hall-parameters/$colorWall-$roofType.svg")}}"
            alt = "{{trans($colorWall)}} {{trans("t_h_p.text.gable_wall")}}" >

    <label class="self-center" for = "{{$colorWall}}_gable_wall" >{{trans("t_h_p.text.yes")}}</label >

    <input checked
           type = "radio"
           name = "{{$colorWall}}_{{$roofType}}_wall"
           id = "{{$colorWall}}_{{$roofType}}_wall"
           value="yes"
           class="self-center"
    >

    <label class="self-center" for = "{{$colorWall}}_{{$roofType}}_wall" >{{trans("t_h_p.text.no")}}</label >

    <input
            type = "radio"
            name = "{{$colorWall}}_{{$roofType}}_wall"
            id = "{{$colorWall}}_{{$roofType}}_wall"
            value="no"
            class="self-center"
    >

</fieldset >


