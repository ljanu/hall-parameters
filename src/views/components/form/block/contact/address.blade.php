{{-- component address contact --}}
<x-hall-parameters::helpers.form-fieldset :legend="trans('t_h_p.text.address')">
    <x-slot name="content">

        {{-- address line 1 --}}
        <x-hall-parameters::helpers.form-item>

            <x-slot name="label">
                <label for = "address_line_1" >
                    {{trans("t_h_p.text.address_line_1")}}
                </label >
            </x-slot>

            <x-slot name="input">
                <input
                        type = "text"
                        name = "address_line_1"
                        id = "address_line_1"
                        class="w-full"
                >
            </x-slot>

        </x-hall-parameters::helpers.form-item>

        {{-- address line 2 --}}
        <x-hall-parameters::helpers.form-item>

            <x-slot name="label">
                <label for = "address_line_2">
                    {{trans("t_h_p.text.address_line_2")}}
                </label >
            </x-slot>

            <x-slot name="input">
                <input
                        type = "text"
                        name = "address_line_2"
                        id = "address_line_2"
                        class="w-full"
                >
            </x-slot>

        </x-hall-parameters::helpers.form-item>

        {{-- city --}}
        <x-hall-parameters::helpers.form-item>

            <x-slot name="label">
                <label  for = "city" >
                    {{trans("t_h_p.text.city")}}
                </label >
            </x-slot>

            <x-slot name="input">
                <input
                        type = "text"
                        name = "city"
                        id = "city"
                        class="w-full"
                >
            </x-slot>

        </x-hall-parameters::helpers.form-item>

        {{-- zip code --}}
        <x-hall-parameters::helpers.form-item>

            <x-slot name="label">
                <label  for = "zip_code" >
                    {{trans("t_h_p.text.zip_code")}}
                </label >
            </x-slot>

            <x-slot name="input">
                <input
                        type = "text"
                        name = "zip_code"
                        id = "zip_code"
                        class="w-full"
                >
            </x-slot>

        </x-hall-parameters::helpers.form-item>

        {{-- region --}}
        <x-hall-parameters::helpers.form-item>

            <x-slot name="label">
                <label  for = "region" > {{trans("t_h_p.text.region")}}</label >
            </x-slot>

            <x-slot name="input">
                <input
                        type = "text"
                        name = "region"
                        id = "region"
                        class="w-full"
                >
            </x-slot>

        </x-hall-parameters::helpers.form-item>

        {{-- distance --}}
        <x-hall-parameters::helpers.form-item>

            <x-slot name="label">
                <label  for = "distance" >
                    {{trans("t_h_p.text.distance")}}
                </label >
            </x-slot>

            <x-slot name="input">
                <input
                        type = "text"
                        name = "distance"
                        id = "distance"
                        class="w-full"
                >
            </x-slot>

        </x-hall-parameters::helpers.form-item>

        {{-- plot number --}}
        <x-hall-parameters::helpers.form-item>

            <x-slot name="label">
                <label  for = "plot_number" >
                    {{trans("t_h_p.text.plot_number")}}
                </label >

            </x-slot>

            <x-slot name="input">
                <input
                        type = "text"
                        name = "plot_number"
                        id = "plot_number"
                        class="w-full"
                >
            </x-slot>

        </x-hall-parameters::helpers.form-item>

        {{-- country --}}
        <x-hall-parameters::helpers.form-item>

            <x-slot name="label">
                <label  for = "country" >
                    {{trans("t_h_p.text.country")}}
                </label >

            </x-slot>

            <x-slot name="input">
                <input
                        type = "text"
                        name = "country"
                        id = "country"
                        class="w-full"
                >
            </x-slot>

        </x-hall-parameters::helpers.form-item>

    </x-slot>
</x-hall-parameters::helpers.form-fieldset>