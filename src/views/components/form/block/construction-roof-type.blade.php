{{-- component roof type --}}

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
            </label >

            <input
                    type = "radio"
                    id = "gable_roof"
                    class = "self-center"
                    name = "roof_type"
                    value = "gable_roof"
                    checked = "checked" >
        </div >

        {{-- flat  roof left --}}
        <div class = "mx-5" >
            <label
                    for = "flat_roof_left"
                    class = "text-right self-center" >
                <img
                        src = "{{asset('images/hall-parameters/flat-roof-left.svg')}}"
                        alt = "{{trans("t_h_p.text.flat_roof_left")}}" >
            </label >
            <input
                    type = "radio"
                    id = "flat_roof_left"
                    class = "self-center"
                    name = "roof_type"
                    value = "flat_roof_left" >
        </div >

        {{-- flat roof right --}}
        <div >
            <label
                    for = "flat_roof_right"
                    class = "text-right self-center" >
                <img
                        src = "{{asset('images/hall-parameters/flat-roof-right.svg')}}"
                        alt = "{{trans("t_h_p.text.flat_roof_right")}}" >
            </label >
            <input
                    id = "flat_roof_right"
                    class = "self-center"
                    type = "radio"
                    name = "roof_type"
                    value = "flat_roof_right" >
        </div >

    </div >

</fieldset >