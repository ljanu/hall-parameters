{{-- component html form construction --}}
@props([
    'method' => $method,
    "basicSetting" => new \Tudy\HallParameters\Providers\BasicFormSettings(),
])

{{-- component wraper --}}
<div class = "mt-5 md:mt-10 bg-gray-100 dark:bg-gray-800" >


    {{-- img dimension--}}
    <div class = "flex flex-col items-center md:flex-row md:justify-center " >
        {{-- img --}}
        <img
                class = "mt-5"
                src = "{{asset('images/hall-parameters/gable-roof-dimension.svg')}}"
                width = "200"
                height = "200"
                alt = "gable roof dimension" >
        <img
                class = "mt-5"
                src = "{{asset('images/hall-parameters/flat-roof-dimension.svg')}}"
                width = "200"
                height = "200"
                alt = "gable roof dimension" >
    </div >

    {{-- form content wraper --}}
    <div class = "py-5 flex justify-center text-center " >

        {{-- form --}}
        <form
                x-data = "{
                        roofPitch: {{$basicSetting->roofPitchGable()}},
                        minRoofPitch: {{$basicSetting->minRoofPitchGable()}},
                        maxRoofPitch: {{$basicSetting->maxRoofPitchGable()}}
                        }"
                action = "{{route('construction.store')}}"
                id = "form-construction"
                method = "post" >
            @csrf
            @method($method)



            {{-- dimension --}}
            <x-hall-parameters::form.block.construction.dimension />


            {{-- rooof type --}}
            <x-hall-parameters::form.block.construction.roof-type />


            {{-- limitations --}}
            <x-hall-parameters::form.block.construction.limitations />


            {{-- button --}}
            <button
                    class = "my-10"
                    type = "submit" >{{trans("t_h_p.text.save")}}</button >

        </form >
    </div >
</div >



