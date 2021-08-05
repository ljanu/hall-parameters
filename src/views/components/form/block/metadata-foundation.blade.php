{{-- component foundation of the building --}}

<fieldset class="m-base" >

    <div class = "m-title" >foundation of the build</div >

    <div class = "m-base grid grid-cols-2 self-center" >
        {{-- claen floor --}}
        <label
                for = "clean_floor"
                class = "text-right self-center" >clean floor
        </label >

        <input
                type = "text"
                id = "clean_floor"
                name = "clean_floor"
                autofocus
                class = "w-56"
                value = ""
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
                size = "0.01"
        >

    </div >

</fieldset >