{{-- component roof type --}}
@props([
    "basicSetting" => new \Tudy\HallParameters\Providers\BasicFormSettings()
])

<fieldset class = "m-base" >
    <legend class = "m-title" >{{trans("t_h_p.text.roof_type")}}</legend >

    {{-- roof type --}}
    <div class = "flex flex-row justify-center" >

        {{-- gable roof --}}
        <div >
            <label
                    for = "gable_roof"
                    class = "text-left self-center" >
                <img
                        src = "{{asset('images/hall-parameters/gable-roof.svg')}}"
                        alt = "{{trans("t_h_p.text.gable_roof")}}" >

            <input
                    x-on:click = "roofPitch = {{$basicSetting->roofPitchGable()}}"
                    type = "radio"
                    id = "gable_roof"
                    class = "self-center"
                    name = "roof_type"
                    value = "gable_roof"
                    checked = "checked" >

            </label >
        </div >

        {{-- flat  roof left --}}
        <div class = "mx-5" >
            <label
                    for = "flat_left_roof"
                    class = "text-right self-center" >
                <img
                        src = "{{asset('images/hall-parameters/flat-left-roof.svg')}}"
                        alt = "{{trans("t_h_p.text.flat_roof_left")}}" >
                <input
                        x-on:click = "roofPitch = {{$basicSetting->roofPitchFlat()}}"
                        type = "radio"
                        id = "flat_left_roof"
                        class = "self-center"
                        name = "roof_type"
                        value = "flat_left_roof" >

            </label >

        </div >

        {{-- flat roof right --}}
        <div >
            <label
                    x-on:click = "roofPitch = {{$basicSetting->roofPitchFlat()}}"
                    for = "flat_right_roof"
                    class = "text-right self-center" >
                <img
                        src = "{{asset('images/hall-parameters/flat-right-roof.svg')}}"
                        alt = "{{trans("t_h_p.text.flat_roof_right")}}" >
                <input
                        id = "flat_right_roof"
                        class = "self-center"
                        type = "radio"
                        name = "roof_type"
                        value = "flat_right_roof" >

            </label >

        </div >

    </div >

</fieldset >