{{-- component fire resistance --}}

<x-hall-parameters::helpers.form-fieldset :legend="trans('t_h_p.text.fire_resistance')">
    <x-slot name="content">

        {{-- fire resitence construciton --}}
        <x-hall-parameters::helpers.form-item>

            <x-slot name="label">
                <label for = "fire_resistance_construction">
                    {{trans("t_h_p.text.fire_resistance_construction")}}
                </label >
            </x-slot>

            <x-slot name="input">
                <input
                        type = "number"
                        id = "fire_resistance_construction"
                        name = "fire_resistance_construction"
                        autofocus
                        class = "w-full"
                        value = ""
                >
            </x-slot>

        </x-hall-parameters::helpers.form-item>

        {{-- fire resistence roof --}}
        <x-hall-parameters::helpers.form-item>

            <x-slot name="label">
                <label for = "fire_resistance_roof">
                    {{trans("t_h_p.text.fire_resistance_roof")}}
                </label >
            </x-slot>

            <x-slot name="input">
                <input
                        type = "number"
                        id = "fire_resistance_roof"
                        name = "fire_resistance_roof"
                        autofocus
                        class = "w-full"
                        value = ""
                        min="0"
                >
            </x-slot>

        </x-hall-parameters::helpers.form-item>

        {{-- fire resistence wals --}}
        <x-hall-parameters::helpers.form-item>

            <x-slot name="label">
                <label for = "fire_resistance_walls">
                    {{trans("t_h_p.text.fire_resistance_walls")}}
                </label >
            </x-slot>

            <x-slot name="input">
                <input
                        type = "number"
                        id = "fire_resistance_walls"
                        name = "fire_resistance_walls"
                        autofocus
                        class = "w-full"
                        value = ""
                        min="0"
                >
            </x-slot>

        </x-hall-parameters::helpers.form-item>

    </x-slot>
</x-hall-parameters::helpers.form-fieldset>