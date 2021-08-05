{{-- component foundation of the building --}}

<fieldset class="m-base" >

    <div class = "m-title" >foundation of the build</div >

    <div class = "m-base grid grid-cols-2 self-center" >
        {{-- claen floor --}}
        <label
                for = "height_floor"
                class = "text-right self-center" >height floor
        </label >

        <input
                type = "number"
                id = "height_floor"
                name = "height_floor"
                autofocus
                class = "w-56"
                value = ""
                step = "0.01"
        >

        {{-- bottom edge facade --}}
        <label
                for = "bottom_edge_facade"
                class = "text-right self-center" > bottom edge facade
        </label >

        <input
                type = "number"
                id = "bottom_edge_facade"
                name = "bottom_edge_facade"
                autofocus
                class = "w-56"
                value = ""
                step = "0.01"
        >

    </div >

</fieldset >