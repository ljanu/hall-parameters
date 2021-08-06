{{-- component fire resistance --}}

<fieldset class="m-base" >
    <div class = "m-title" >{{trans("t_h_p.text.fire_resistance")}}</div >

    <div class = "m-base grid grid-cols-2 self-center" >

        {{--  fire resistance construction --}}
        <label
                for = "fire_resistance_construction"
                class = "text-right self-center" > {{trans("t_h_p.text.fire_resistance_construction")}}
        </label >

        <input
                type = "number"
                id = "fire_resistance_construction"
                name = "fire_resistance_construction"
                autofocus
                class = "w-56"
                value = ""
        >

        {{--  fire resistance roof --}}
        <label
                for = "fire_resistance_roof"
                class = "text-right self-center" > {{trans("t_h_p.text.fire_resistance_roof")}}
        </label >

        <input
                type = "number"
                id = "fire_resistance_roof"
                name = "fire_resistance_roof"
                autofocus
                class = "w-56"
                value = ""
        >

        {{--  fire resistance walls --}}
        <label
                for = "fire_resistance_walls"
                class = "text-right self-center" > {{trans("t_h_p.text.fire_resistance_walls")}}
        </label >

        <input
                type = "number"
                id = "fire_resistance_walls"
                name = "fire_resistance_walls"
                autofocus
                class = "w-56"
                value = ""
        >

    </div >
</fieldset >