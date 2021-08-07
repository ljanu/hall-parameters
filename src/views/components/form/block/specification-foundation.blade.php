{{-- component foundation of the building --}}

<fieldset class="m-base" >

    <legend class = "m-title" >{{trans("t_h_p.text.foundation_build")}}</legend >

    <div class = "m-base grid grid-cols-2 self-center" >
        {{-- height floor --}}
        <label
                for = "height_floor"
                class = "text-right self-center" >{{trans("t_h_p.text.height_floor")}}
        </label >

        <input
                type = "number"
                id = "height_floor"
                name = "height_floor"
                autofocus
                class = "w-56"
                value = ""
                step = "0.01"
                min="0"
        >

        {{-- bottom edge facade --}}
        <label
                for = "bottom_edge_facade"
                class = "text-right self-center" > {{trans("t_h_p.text.bottom_edge_facade")}}
        </label >

        <input
                type = "number"
                id = "bottom_edge_facade"
                name = "bottom_edge_facade"
                autofocus
                class = "w-56"
                value = ""
                step = "0.01"
                min="0"
        >

    </div >

</fieldset >