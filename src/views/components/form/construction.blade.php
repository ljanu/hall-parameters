{{-- component html form construction --}}
@props([
    'method' => $method
])

{{-- component wraper --}}
<div class="mt-5 md:mt-10 bg-gray-100 dark:bg-gray-800">


    {{-- img dimension--}}
    <div class="flex flex-col items-center md:flex-row md:justify-center ">
        {{-- img --}}
        <img class="mt-5" src="{{asset('images/hall-parameters/gable-roof-dimension.svg')}}" width="200" height="200"
             alt="gable roof dimension">
        <img class="mt-5" src="{{asset('images/hall-parameters/flat-roof-dimension.svg')}}" width="200" height="200"
             alt="gable roof dimension">
    </div>

    {{-- form content wraper --}}
    <div class="py-5 flex justify-center text-center ">

        {{-- form --}}
        <form action="{{route('construction.store')}}" id="form-construction" method="post" class="max-w-3xl">
            @csrf
            @method($method)



            {{-- dimension -------------------------------------------------------------------------------------------}}
            <fieldset class="py-10 ">
                <div class="m-title">rozměry</div>

                {{-- dimension --}}
                <div class="flex flex-col items-center md:flex-row ">

                    {{-- width --}}
                    <div class="flex flex-row">
                        <label for="width">
                            <img src="{{asset('images/hall-parameters/width.svg')}}" alt="width">
                        </label>
                        <input type="text" id="width" name="width" autofocus class="w-28" placeholder="šiřka (m)"
                               value="">
                    </div>

                    {{-- lenght --}}
                    <div class="flex flex-row">
                        <label for="length">
                            <img src="{{asset('images/hall-parameters/length.svg')}}" alt="length">
                        </label>
                        <input type="text" id="length" name="length" class="w-28" placeholder="délka (m)" value="">
                    </div>

                    {{-- height --}}
                    <div class="flex flex-row">
                        <label for="height">
                            <img src="{{asset('images/hall-parameters/height.svg')}}" alt="height">
                        </label>
                        <input type="text" id="height" name="height" class="w-28" placeholder="výška (m)" value="">
                    </div>

                </div>

            </fieldset>


            {{-- rooof type ------------------------------------------------------------------------------------------}}
            <fieldset class="mt-14">

                <div class="m-title">typ střechy</div>

                {{-- roof type --}}
                <div class="flex flex-row justify-center">

                    {{-- gable roof --}}
                    <div>
                        <label for="gable_roof" class="text-left self-center">
                            <img src="{{asset('images/hall-parameters/gable-roof.svg')}}" alt="gable roof">
                        </label>
                        <input class="self-center" type="radio" id="gable_roof" name="roof_type" value="gable_roof"
                               checked="checked">
                    </div>

                    {{-- flat  roof left --}}
                    <div class="mx-5">
                        <label for="flat_roof_left" class="text-right self-center">
                            <img src="{{asset('images/hall-parameters/flat-roof-left.svg')}}" alt="flat roof left">
                        </label>
                        <input class="self-center" type="radio" id="flat_roof_left" name="roof_type"
                               value="flat_roof_left">
                    </div>

                    {{-- flar roof right --}}
                    <div>
                        <label for="flat_roof_right" class="text-right self-center">
                            <img src="{{asset('images/hall-parameters/flat-roof-right.svg')}}" alt="flat roof left">
                        </label>
                        <input class="self-center" type="radio" id="flat_roof_right" name="roof_type"
                               value="flat_roof_right">
                    </div>

                </div>

            </fieldset>


            {{-- limitations -----------------------------------------------------------------------------------------}}
            <fieldset class="mt-10">
                <div class="m-title">omezení</div>

                {{-- limitations --}}
                <div class="grid grid-cols-2">

                    {{-- roof pitch --}}
                    <label for="roof_pitch" class="text-right self-center">sklon střechy</label>
                    <input type="text" id="roof_pitch" name="roof_pitch" class="w-28" value="">

                    {{-- max module --}}
                    <label for="max_module" class="text-right self-center">max rozměr modulu</label>
                    <input type="text" id="max_module" name="max_module" class="w-28" value="">

                    {{-- max gap purlin --}}
                    <label for="max_gap_purlin" class="text-right self-center">max rozměr vaznic</label>
                    <input type="text" id="max_gap_purlin" name="max_gap_purlin" class="w-28" value="">

                    {{-- max gap side rails --}}
                    <label for="max_gap_side_rails" class="text-right self-center">max rozměr stěnových vazniček</label>
                    <input type="text" id="max_gap_side_rails" name="max_gap_side_rails" class="w-28" value="">

                </div>

            </fieldset>


            {{-- button --}}
            <button class="my-10" type="submit">{{trans("t_h_p.text.save")}}</button>

        </form>
    </div>
</div>



