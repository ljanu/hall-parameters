{{-- component html form construction --}}
@props([
    'method' => $method
])

<div class="mt-10 py-5 flex justify-center text-center bg-gray-200 dark:bg-gray-800">
    {{-- form --}}
    <form action="{{route('construction.store')}}" id="form-construction" method="post" class="max-w-3xl">
        @csrf
        @method($method)



        {{-- dimension --}}
        <fieldset class="mt-10 py-10 ">
            <div class="mb-5 text-blue-700 dark:text-blue-300">rozměry</div>

            <div class="flex flex-col md:flex-row ">
                <div>
                    <label for="width">šířka</label>
                    <input type="text" id="width" name="width" autofocus class="w-28" placeholder="šiřka (m)" value="">
                </div>

                <div>
                    <label for="length">délka</label>
                    <input type="text" id="length" name="length" class="w-28" placeholder="délka (m)" value="">
                </div>

                <div>
                    <label for="height">výška</label>
                    <input type="text" id="height" name="height" class="w-28" placeholder="výška (m)" value="">
                </div>
            </div>

        </fieldset>


        {{-- rooof --}}
        <fieldset class="mt-14">

            <div class="mb-5 text-blue-700 dark:text-blue-300">střecha</div>

            {{-- foof type --}}
            <div class="grid grid-cols-2">
                <label for="gable_roof" class="text-right self-center">sedlová střecha</label>
                <input class="self-center" type="radio" id="gable_roof" name="roof_type" value="gable_roof" checked="checked">

                <label for="flat_roof_right" class="text-right self-center">pultová střecha do prava</label>
                <input class="self-center"  type="radio" id="flat_roof_right" name="roof_type" value="flat_roof_right">

                <label for="flat_roof_left" class="text-right self-center">pultová střecha do leva</label>
                <input class="self-center"  type="radio" id="flat_roof_left" name="roof_type" value="flat_roof_left">
            </div>

            {{-- roof pitch --}}
            <label for="roof_pitch">sklon střechy</label>
            <input type="text" id="roof_pitch" name="roof_pitch" class="w-28" value="">

        </fieldset>


        {{-- limitations --}}
        <fieldset class="mt-10">
            <div class="mb-5 text-blue-700 dark:text-blue-300">omezení</div>


            <div class="grid grid-cols-2">
                <label for="max_model" class="text-right self-center">max rozměr modelu</label>
                <input type="text" id="max_model" name="max_model" class="w-28"  value="">

                <label for="max_gap_purlin" class="text-right self-center">max rozměr vaznic</label>
                <input type="text" id="max_gap_purlin" name="max_gap_purlin" class="w-28" value="">

                <label for="max_gap_side_rails" class="text-right self-center">max rozměr stěnových vazniček</label>
                <input type="text" id="max_gap_side_rails" name="max_gap_side_rails" class="w-28" value="">
            </div>

        </fieldset>


        {{-- button --}}
        <button class="my-10" type="submit">{{trans("t_h_p.text.save")}}</button>

    </form>
</div>



