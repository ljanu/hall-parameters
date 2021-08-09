{{-- componet cladding dimension roof --}}
@props([
    "roofType"
])

<fieldset class="flex flex-col md:flex-row" >
    <legend class = "m-title" >Střecha</legend >

    <img
            src = "{{asset("images/hall-parameters/$roofType-roof.svg")}}"
            alt = "gable roof"
            width="75"
    >

    {{-- width --}}
    <div>
        <label for = "floor_width" >šířka</label >
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
        <label for = "floor_length" >délka</label >
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