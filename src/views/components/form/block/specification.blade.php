{{-- component specification --}}

<fieldset class = "m-base" >

    <div class = "m-title" >specification</div >

    {{-- wrap basic items --}}
    <div class = "grid grid-cols-2" >


        {{-- name --}}
        <label
                for = "name"
                class = "text-right self-center" >name object
        </label >

        <input
                type = "text"
                id = "name"
                name = "name"
                autofocus
                class = "w-56"
                value = ""
        >


        {{-- roof load --}}
        <label
                for = "roof_load"
                class = "text-right self-center" > roof load
        </label >

        <select
                name = "roof_load"
                id = "roof_load"
                class = "w-56"
        >
            <option value = "1" >zatížení 100 kg/m2</option >
            <option value = "1" >zatížení 100 kg/m2</option >
            <option value = "1" >zatížení 100 kg/m2</option >
            <option value = "1" >zatížení 100 kg/m2</option >
        </select >


        {{-- insulates --}}
        <label
                for = "insulated"
                class = "text-right self-center" >insulated
        </label >
        <select
                name = "insulated"
                id = "insulated"
                class = "w-56"
        >
            <option value = "1" >zateplená</option >
            <option value = "1" >nezateplená</option >
            <option value = "1" >částečně zateplená</option >
        </select >

    </div >

</fieldset >