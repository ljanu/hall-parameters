{{-- component color design --}}
@props([
    'colorsCladding' => config('config_hall.ral_base')
] )

<x-hall-parameters::helpers.form-fieldset
        :legend="trans('t_h_p.text.basic_color_design')">

    <x-slot name="content">

       {{-- roof --}}
        <x-hall-parameters::helpers.form-item>

            <x-slot name="label">
                <label for = "color_roof">
                    {{trans("t_h_p.text.color_roof")}}
                </label >
            </x-slot>

            <x-slot name="input">
                <select
                        name = "color_roof"
                        id = "color_roof"
                        class = "w-56"
                >
                    @foreach ($colorsCladding as $color)
                        <option
                                class = "{{'ral-'.$color}}"
                                value = "{{$color}}" >RAL {{$color}}</option >
                    @endforeach
                </select >
            </x-slot>

        </x-hall-parameters::helpers.form-item>

        {{-- walls --}}
        <x-hall-parameters::helpers.form-item>

            <x-slot name="label">
                <label for = "color_walls">
                    {{trans("t_h_p.text.color_walls")}}
                </label >
            </x-slot>

            <x-slot name="input">
                <select
                        name = "color_walls"
                        id = "color_walls"
                        class = "w-56"
                >
                    @foreach ($colorsCladding as $color)
                        <option
                                class = "{{'ral-'.$color}}"
                                value = "{{$color}}" >RAL {{$color}}</option >
                    @endforeach
                </select >
            </x-slot>

        </x-hall-parameters::helpers.form-item>

        {{-- fill --}}
        <x-hall-parameters::helpers.form-item>

            <x-slot name="label">
                <label for = "color_fill">
                    {{trans("t_h_p.text.color_fill")}}
                </label >
            </x-slot>

            <x-slot name="input">
                <select
                        name = "color_fill"
                        id = "color_fill"
                        class = "w-56"
                >
                    @foreach ($colorsCladding as $color)
                        <option
                                class = "{{'ral-'.$color}}"
                                value = "{{$color}}" >RAL {{$color}}</option >
                    @endforeach
                </select >

            </x-slot>
        </x-hall-parameters::helpers.form-item>

        {{-- edges --}}
        <x-hall-parameters::helpers.form-item>

            <x-slot name="label">
                <label for = "color_edges">
                    {{trans("t_h_p.text.color_edges")}}
                </label >
            </x-slot>

            <x-slot name="input">
                <select
                        name = "color_edges"
                        id = "color_edges"
                        class = "w-56"
                >
                    @foreach ($colorsCladding as $color)
                        <option
                                class = "{{'ral-'.$color}}"
                                value = "{{$color}}" >RAL {{$color}}</option >
                    @endforeach
                </select >

            </x-slot>

        </x-hall-parameters::helpers.form-item>

        {{-- construction --}}
        <x-hall-parameters::helpers.form-item>

            <x-slot name="label">
                <label for = "color_construction">
                    {{trans("t_h_p.text.color_construction")}}
                </label >
            </x-slot>

            <x-slot name="input">
                <select
                        name = "color_construction"
                        id = "color_construction"
                        class = "w-56"
                >
                    <option value = "7035" >RAL 7038</option >
                </select >
            </x-slot>

        </x-hall-parameters::helpers.form-item>

    </x-slot>

</x-hall-parameters::helpers.form-fieldset>