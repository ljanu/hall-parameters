{{-- component specification --}}

<x-hall-parameters::helpers.form-fieldset :legend="trans('t_h_p.text.specification')">
    
    <x-slot name="content">

        {{-- name object --}}
        <x-hall-parameters::helpers.form-item>

            <x-slot name="label">

                <label for = "name">
                    {{trans("t_h_p.text.name_object")}}
                </label >

            </x-slot>

            <x-slot name="input">

                <input
                        type = "text"
                        id = "name"
                        name = "name"
                        autofocus
                        value = ""
                        class="w-full"
                >

            </x-slot>

        </x-hall-parameters::helpers.form-item>

        {{-- roof load --}}
        <x-hall-parameters::helpers.form-item>

            <x-slot name="label">

                <label for = "roof_load">
                    {{trans("t_h_p.text.roof_load")}}
                </label >

            </x-slot>

            <x-slot name="input">

                <select
                        name = "roof_load"
                        class="w-full"
                        id = "roof_load"
                >
                    <option value = "1" >{{trans("t_h_p.text.load")}} 100 kg/m2</option >
                    <option value = "2" >{{trans("t_h_p.text.load")}} 200 kg/m2</option >
                    <option value = "3" >{{trans("t_h_p.text.load")}} 300 kg/m2</option >
                    <option value = "4" >{{trans("t_h_p.text.load")}} 400 kg/m2</option >
                    <option value = "5" >{{trans("t_h_p.text.load")}} 500 kg/m2</option >
                    <option value = "6" >{{trans("t_h_p.text.load")}} 600 kg/m2</option >
                </select >

            </x-slot>

        </x-hall-parameters::helpers.form-item>

    </x-slot>

</x-hall-parameters::helpers.form-fieldset>