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
                <div class="m-title">{{trans("t_h_p.text.dimension")}}</div>

                {{-- dimension --}}
                <div class="flex flex-col items-center md:flex-row ">

                    {{-- width --}}
                    <div class="flex flex-row">
                        <label for="width">
                            <img src="{{asset('images/hall-parameters/width.svg')}}" alt="{{trans("t_h_p.text.width")}}">
                        </label>
                        <input type="text" id="width" name="width" autofocus class="w-28" placeholder="{{trans("t_h_p.text.width")}} (m)"
                               value="">
                    </div>

                    {{-- lenght --}}
                    <div class="flex flex-row">
                        <label for="length">
                            <img src="{{asset('images/hall-parameters/length.svg')}}" alt="{{trans("t_h_p.text.length")}}">
                        </label>
                        <input type="text" id="length" name="length" class="w-28" placeholder="{{trans("t_h_p.text.length")}} (m)" value="">
                    </div>

                    {{-- height --}}
                    <div class="flex flex-row">
                        <label for="height">
                            <img src="{{asset('images/hall-parameters/height.svg')}}" alt="{{trans("t_h_p.text.height")}}">
                        </label>
                        <input type="text" id="height" name="height" class="w-28" placeholder="{{trans("t_h_p.text.height")}} (m)" value="">
                    </div>

                </div>

            </fieldset>


            {{-- rooof type ------------------------------------------------------------------------------------------}}
            <fieldset class="mt-14">

                <div class="m-title">{{trans("t_h_p.text.roof_type")}}</div>

                {{-- roof type --}}
                <div class="flex flex-row justify-center">

                    {{-- gable roof --}}
                    <div>
                        <label for="gable_roof" class="text-left self-center">
                            <img src="{{asset('images/hall-parameters/gable-roof.svg')}}" alt="{{trans("t_h_p.text.gable_roof")}}">
                        </label>
                        <input class="self-center" type="radio" id="gable_roof" name="roof_type" value="gable_roof"
                               checked="checked">
                    </div>

                    {{-- flat  roof left --}}
                    <div class="mx-5">
                        <label for="flat_roof_left" class="text-right self-center">
                            <img src="{{asset('images/hall-parameters/flat-roof-left.svg')}}" alt="{{trans("t_h_p.text.flat_roof_left")}}">
                        </label>
                        <input class="self-center" type="radio" id="flat_roof_left" name="roof_type"
                               value="flat_roof_left">
                    </div>

                    {{-- flar roof right --}}
                    <div>
                        <label for="flat_roof_right" class="text-right self-center">
                            <img src="{{asset('images/hall-parameters/flat-roof-right.svg')}}" alt="{{trans("t_h_p.text.flat_roof_right")}}">
                        </label>
                        <input class="self-center" type="radio" id="flat_roof_right" name="roof_type"
                               value="flat_roof_right">
                    </div>

                </div>

            </fieldset>


            {{-- limitations -----------------------------------------------------------------------------------------}}
            <fieldset class="mt-10">
                <div class="m-title">{{trans("t_h_p.text.limitations")}}</div>

                {{-- limitations --}}
                <div class="grid grid-cols-2">

                    {{-- roof pitch --}}
                    <label for="roof_pitch" class="text-right self-center">{{trans("t_h_p.text.roof_pitch")}}</label>
                    <input type="text" id="roof_pitch" name="roof_pitch" class="w-28" value="">

                    {{-- max module --}}
                    <label for="max_module" class="text-right self-center">{{trans("t_h_p.text.max_module_size")}}</label>
                    <input type="text" id="max_module" name="max_module" class="w-28" value="">

                    {{-- max gap purlin --}}
                    <label for="max_gap_purlin" class="text-right self-center">{{trans("t_h_p.text.max_purlin_size")}}</label>
                    <input type="text" id="max_gap_purlin" name="max_gap_purlin" class="w-28" value="">

                    {{-- max gap side rails --}}
                    <label for="max_gap_side_rails" class="text-right self-center">{{trans("t_h_p.text.max_side_rails_size")}}</label>
                    <input type="text" id="max_gap_side_rails" name="max_gap_side_rails" class="w-28" value="">

                </div>

            </fieldset>


            {{-- button --}}
            <button class="my-10" type="submit">{{trans("t_h_p.text.save")}}</button>

        </form>
    </div>
</div>



