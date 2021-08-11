{{-- componet cladding dimension roof --}}
@props([
    "roofType"
])

<fieldset class="flex flex-col md:flex-row" >
    <legend class = "m-title" >{{trans("t_h_p.text.roof")}}</legend >

    <img
            src = "{{asset("images/hall-parameters/$roofType-roof.svg")}}"
            alt = "gable roof"
            width="75"
    >

    {{-- width --}}
    <div>
        <label for = "floor_width" >{{trans("t_h_p.text.width")}}</label >
        <input
                class = "w-28"
                type = "number"
                id = "floor_width"
                name = "floor_width"
                value = ""
                step="0.01"
                min = "0" >
    </div>

    {{-- length --}}
    <div>
        <label for = "floor_length" >{{trans("t_h_p.text.height")}}</label >
        <input
                class = "w-28"
                type = "number"
                id = "floor_length"
                name = "floor_length"
                value = ""
                step="0.01"
                min = "0" >
    </div>

</fieldset >