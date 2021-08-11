{{-- component construction limitations --}}

<fieldset class = "m-base" >
    <legend class = "m-title" >{{trans("t_h_p.text.limitations")}}</legend >

    {{-- limitations --}}
    <div class = "grid grid-cols-2" >

        {{-- roof pitch --}}
        <label
                for = "roof_pitch"
                class = "text-right self-center" >{{trans("t_h_p.text.roof_pitch")}}</label >
        <input
                type = "number"
                id = "roof_pitch"
                name = "roof_pitch"
                class = "w-36"
                value = ""
                min = "0"
        >

        {{-- max module --}}
        <label
                for = "max_module"
                class = "text-right self-center" >{{trans("t_h_p.text.max_module_size")}}</label >
        <input
                type = "number"
                id = "max_module"
                name = "max_module"
                class = "w-36"
                value = ""
                min = "0"
        >

        {{-- max gap purlin --}}
        <label
                for = "max_gap_purlin"
                class = "text-right self-center" >{{trans("t_h_p.text.max_purlin_size")}}</label >
        <input
                type = "number"
                id = "max_gap_purlin"
                name = "max_gap_purlin"
                class = "w-36"
                value = ""
                step = "0.01"
                min = "0" >

        {{-- max gap side rails --}}
        <label
                for = "max_gap_side_rails"
                class = "text-right self-center" >{{trans("t_h_p.text.max_side_rails_size")}}</label >
        <input
                type = "number"
                id = "max_gap_side_rails"
                name = "max_gap_side_rails"
                class = "w-36"
                value = ""
                step = "0.01"
                min = "0"
        >

    </div >

</fieldset >