{{-- component specification --}}

<fieldset class = "m-base" >

    <legend class = "m-title" >{{trans("t_h_p.text.specification")}}</legend >

    {{-- wrap basic items --}}
    <div class = "grid grid-cols-2" >


        {{-- name object --}}
        <label
                for = "name"
                class = "text-right self-center" > {{trans("t_h_p.text.name_object")}}
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
                class = "text-right self-center" > {{trans("t_h_p.text.roof_load")}}
        </label >

        <select
                name = "roof_load"
                id = "roof_load"
                class = "w-56"
        >
            <option value = "1" >{{trans("t_h_p.text.load")}} 100 kg/m2</option >
            <option value = "2" >{{trans("t_h_p.text.load")}} 200 kg/m2</option >
            <option value = "3" >{{trans("t_h_p.text.load")}} 300 kg/m2</option >
            <option value = "4" >{{trans("t_h_p.text.load")}} 400 kg/m2</option >
            <option value = "5" >{{trans("t_h_p.text.load")}} 500 kg/m2</option >
            <option value = "6" >{{trans("t_h_p.text.load")}} 600 kg/m2</option >
        </select >


        {{-- insulates --}}
        <label
                for = "insulated"
                class = "text-right self-center" >{{trans("t_h_p.text.insulated")}}
        </label >
        <select
                name = "insulated"
                id = "insulated"
                class = "w-56"
        >
            <option value = "yes" >{{trans("t_h_p.text.yes")}}</option >
            <option value = "no" >{{trans("t_h_p.text.no")}}</option >
            <option value = "partly" >{{trans("t_h_p.text.partly")}}</option >
        </select >

    </div >

</fieldset >