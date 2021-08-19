{{-- component construction limitations --}}
@props([
    "basicSetting" => new \Tudy\HallParameters\Providers\BasicFormSettings()
])

<x-hall-parameters::helpers.form-fieldset :legend="trans('t_h_p.text.limitations')">
    <x-slot name="content">

        {{-- roof pitch --}}
        <x-hall-parameters::helpers.form-item>

            <x-slot name="label">
                <label for = "roof_pitch">
                    {{trans("t_h_p.text.roof_pitch")}}
                </label >
            </x-slot>

            <x-slot name="input">
                <input
                        x-bind:value="roofPitch"
                        x-bind:min="minRoofPitch"
                        x-bind:max="maxRoofPitch"
                        type = "number"
                        id = "roof_pitch"
                        name = "roof_pitch"
                        class = "w-full"
                >
            </x-slot>

        </x-hall-parameters::helpers.form-item>

        {{-- max module --}}
        <x-hall-parameters::helpers.form-item>

            <x-slot name="label">
                <label for = "max_module">
                    {{trans("t_h_p.text.max_module_size")}}
                </label >

            </x-slot>

            <x-slot name="input">
                <input
                        type = "number"
                        id = "max_module"
                        name = "max_module"
                        class = "w-full"
                        step="0.01"
                        value = "{{$basicSetting->moduleSize()}}"
                        min = "{{$basicSetting->minModuleSize()}}"
                        max="{{$basicSetting->maxModuleSize()}}"
                >
            </x-slot>

        </x-hall-parameters::helpers.form-item>

        {{-- max gap purlin --}}
        <x-hall-parameters::helpers.form-item>

            <x-slot name="label">
                <label for = "max_gap_purlin">
                    {{trans("t_h_p.text.max_purlin_size")}}
                </label >
            </x-slot>

            <x-slot name="input">
                <input
                        type = "number"
                        id = "max_gap_purlin"
                        name = "max_gap_purlin"
                        class = "w-full"
                        step = "0.01"
                        value = "{{$basicSetting->purlinDistanceDimension()}}"
                        min = "{{$basicSetting->minPurlinDistanceDimension()}}"
                        max="{{$basicSetting->maxPurlinDistanceDimension()}}"
                >
            </x-slot>

        </x-hall-parameters::helpers.form-item>

        {{-- max gap side rails --}}
        <x-hall-parameters::helpers.form-item>

            <x-slot name="label">
                <label for = "max_gap_side_rails">
                    {{trans("t_h_p.text.max_side_rails_size")}}
                </label >
            </x-slot>

            <x-slot name="input">
                <input
                        type = "number"
                        id = "max_gap_side_rails"
                        name = "max_gap_side_rails"
                        class = "w-full"
                        step = "0.01"
                        value = "{{$basicSetting->dimensionSideRailDistance()}}"
                        min = "{{$basicSetting->minDimensionSideRailDistance()}}"
                        max="{{$basicSetting->maxDimensionSideRailDistance()}}"
                >
            </x-slot>

        </x-hall-parameters::helpers.form-item>

    </x-slot>
</x-hall-parameters::helpers.form-fieldset>