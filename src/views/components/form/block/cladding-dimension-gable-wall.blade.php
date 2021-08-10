{{-- components gable wall --}}

@props([
    "colorWall",
    "roofType",
])


<fieldset class="flex flex-row justify-between" >

    <legend class="m-title" >štítová stěna</legend >

    <img
            src = " {{asset("images/hall-parameters/$colorWall-$roofType.svg")}}"
            alt = "{{trans($colorWall)}} gable" >

    <label class="self-center" for = "{{$colorWall}}_gable_wall" >ano</label >

    <input checked
           type = "radio"
           name = "{{$colorWall}}_{{$roofType}}_wall"
           id = "{{$colorWall}}_{{$roofType}}_wall"
           value="yes"
           class="self-center"
    >

    <label class="self-center" for = "{{$colorWall}}_{{$roofType}}_wall" >ne</label >

    <input
            type = "radio"
            name = "{{$colorWall}}_{{$roofType}}_wall"
            id = "{{$colorWall}}_{{$roofType}}_wall"
            value="no"
            class="self-center"
    >

</fieldset >


