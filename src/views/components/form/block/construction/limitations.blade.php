{{-- component construction limitations --}}
@props([
    "basicSetting" => new \Tudy\HallParameters\Providers\BasicFormSettings()
])

<fieldset class = "m-base" >
    <legend class = "m-title" >{{trans("t_h_p.text.limitations")}}</legend >

    {{-- limitations --}}
    <div class = "grid grid-cols-2" >

        {{-- roof pitch --}}
        <label
                for = "roof_pitch"
                class = "text-right self-center" >{{trans("t_h_p.text.roof_pitch")}}</label >
        <input
                x-bind:value="roofPitch"
                type = "number"
                id = "roof_pitch"
                name = "roof_pitch"
                class = "w-36"
{{--                value = "{{$basicSetting->roofPitchGable()}}"--}}
                min="2" {{-- todo min a max uhel --}}
        >

        {{-- max module --}}
        <label
                for = "max_module"
                class = "text-right self-center" >{{trans("t_h_p.text.max_module_size")}}</label >
        <input
                type = "number"
                id = "max_module"
                name = "max_module"
                class = "w-36"
                step="0.01"
                value = "{{$basicSetting->moduleSize()}}"
                min = "{{$basicSetting->minModuleSize()}}"
                max="{{$basicSetting->maxModuleSize()}}"
        >

        {{-- max gap purlin --}}
        <label
                for = "max_gap_purlin"
                class = "text-right self-center" >{{trans("t_h_p.text.max_purlin_size")}}</label >
        <input
                type = "number"
                id = "max_gap_purlin"
                name = "max_gap_purlin"
                class = "w-36"
                step = "0.01"
                value = "{{$basicSetting->purlinDistanceDimension()}}"
                min = "{{$basicSetting->minPurlinDistanceDimension()}}"
                max="{{$basicSetting->maxPurlinDistanceDimension()}}"
        >

        {{-- max gap side rails --}}
        <label
                for = "max_gap_side_rails"
                class = "text-right self-center" >{{trans("t_h_p.text.max_side_rails_size")}}</label >
        <input
                type = "number"
                id = "max_gap_side_rails"
                name = "max_gap_side_rails"
                class = "w-36"
                step = "0.01"
                value = "{{$basicSetting->dimensionSideRailDistance()}}"
                min = "{{$basicSetting->minDimensionSideRailDistance()}}"
                max="{{$basicSetting->maxDimensionSideRailDistance()}}"
        >

    </div >

</fieldset >