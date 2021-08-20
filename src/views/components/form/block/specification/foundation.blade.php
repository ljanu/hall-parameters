{{-- component foundation of the building --}}

<x-hall-parameters::helpers.form-fieldset :legend="trans('t_h_p.text.foundation_build')">
    <x-slot name="content">

        {{-- height floor --}}
        <x-hall-parameters::helpers.form-item>

            <x-slot name="label">
                <label for = "height_floor">
                    {{trans("t_h_p.text.height_floor")}}
                </label >
            </x-slot>

            <x-slot name="input">
                <input
                        type = "number"
                        id = "height_floor"
                        name = "height_floor"
                        autofocus
                        class = "w-full"
                        value = ""
                        step = "0.01"
                        min="0"
                >
            </x-slot>

        </x-hall-parameters::helpers.form-item>

        {{-- buttom edge facade --}}
        <x-hall-parameters::helpers.form-item>

            <x-slot name="label">
                <label for = "bottom_edge_facade">
                    {{trans("t_h_p.text.bottom_edge_facade")}}
                </label >
            </x-slot>

            <x-slot name="input">
                <input
                        type = "number"
                        id = "bottom_edge_facade"
                        name = "bottom_edge_facade"
                        autofocus
                        class = "w-full"
                        value = ""
                        step = "0.01"
                        min="0"
                >
            </x-slot>

        </x-hall-parameters::helpers.form-item>

    </x-slot>
</x-hall-parameters::helpers.form-fieldset>