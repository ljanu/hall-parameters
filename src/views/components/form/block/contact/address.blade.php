{{-- component address contact --}}
<x-hall-parameters::helpers.form-fieldset :legend="trans('t_h_p.text.address')">
    <x-slot name="content">

        {{-- address line 1 --}}
        <x-hall-parameters::helpers.form-item>

            <x-slot name="label">

            </x-slot>

            <x-slot name="input">

            </x-slot>

        </x-hall-parameters::helpers.form-item>

        {{-- address line 2 --}}
        <x-hall-parameters::helpers.form-item>

            <x-slot name="label">

            </x-slot>

            <x-slot name="input">

            </x-slot>

        </x-hall-parameters::helpers.form-item>

        {{-- city --}}
        <x-hall-parameters::helpers.form-item>

            <x-slot name="label">

            </x-slot>

            <x-slot name="input">

            </x-slot>

        </x-hall-parameters::helpers.form-item>

        {{-- zip code --}}
        <x-hall-parameters::helpers.form-item>

            <x-slot name="label">

            </x-slot>

            <x-slot name="input">

            </x-slot>

        </x-hall-parameters::helpers.form-item>

        {{-- region --}}
        <x-hall-parameters::helpers.form-item>

            <x-slot name="label">

            </x-slot>

            <x-slot name="input">

            </x-slot>

        </x-hall-parameters::helpers.form-item>

        {{-- distance --}}
        <x-hall-parameters::helpers.form-item>

            <x-slot name="label">

            </x-slot>

            <x-slot name="input">

            </x-slot>

        </x-hall-parameters::helpers.form-item>

        {{-- plot number --}}
        <x-hall-parameters::helpers.form-item>

            <x-slot name="label">

            </x-slot>

            <x-slot name="input">

            </x-slot>

        </x-hall-parameters::helpers.form-item>

        {{-- country --}}
        <x-hall-parameters::helpers.form-item>

            <x-slot name="label">

            </x-slot>

            <x-slot name="input">

            </x-slot>

        </x-hall-parameters::helpers.form-item>

    </x-slot>
</x-hall-parameters::helpers.form-fieldset>


<fieldset class = "m-base grid grid-cols-2" >
    <legend class = "m-title" >{{trans("t_h_p.text.address")}}</legend >

    {{-- address line 1 --}}
    <label
            class = "text-right self-center"
            for = "address_line_1" > {{trans("t_h_p.text.address_line_1")}}</label >

    <input
            type = "text"
            name = "address_line_1"
            id = "address_line_1"
    >

    {{-- address line 2 --}}
    <label class="text-right self-center" for = "address_line_2" > {{trans("t_h_p.text.address_line_2")}}</label >

    <input
            type = "text"
            name = "address_line_2"
            id = "address_line_2"
    >

    {{-- city --}}
    <label class="text-right self-center" for = "city" > {{trans("t_h_p.text.city")}}</label >

    <input
            type = "text"
            name = "city"
            id = "city"
    >

    {{-- zip code --}}
    <label class="text-right self-center" for = "zip_code" > {{trans("t_h_p.text.zip_code")}}</label >

    <input
            type = "text"
            name = "zip_code"
            id = "zip_code"
    >

    {{-- region --}}
    <label class="text-right self-center" for = "region" > {{trans("t_h_p.text.region")}}</label >

    <input
            type = "text"
            name = "region"
            id = "region"
    >

    {{-- distance --}}
    <label class="text-right self-center" for = "distance" > {{trans("t_h_p.text.distance")}}</label >

    <input
            type = "text"
            name = "distance"
            id = "distance"
    >

    {{-- plot number --}}
    <label class="text-right self-center" for = "plot_number" > {{trans("t_h_p.text.plot_number")}}</label >

    <input
            type = "text"
            name = "plot_number"
            id = "plot_number"
    >

    {{-- country --}}
    <label class="text-right self-center" for = "country" > {{trans("t_h_p.text.country")}}</label >

    <input
            type = "text"
            name = "country"
            id = "country"
    >

</fieldset >