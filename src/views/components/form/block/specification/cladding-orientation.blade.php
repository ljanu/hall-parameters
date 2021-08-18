{{-- component cladding orientation --}}
<x-hall-parameters::helpers.form-fieldset
        :legend="trans('t_h_p.text.cladding_orientation')"
>

    <x-slot name="content">

        {{-- orintation facade profile --}}
        <div class = "flex flex-row justify-center" >

            <div >
                <label
                        for = "horizontal"
                        class = "text-left self-center" >
                    <img
                            src = "{{asset('images/hall-parameters/horizontal.svg')}}"
                            alt = "{{trans("t_h_p.text.gable_roof")}}" >
                </label >

                <input
                        type = "radio"
                        id = "horizontal"
                        class = "self-center"
                        name = "cladding_orientation"
                        value = "horizontal"
                        checked = "checked" >
            </div >

            {{-- flat  roof left --}}
            <div class = "mx-5" >
                <label
                        for = "vertical"
                        class = "text-right self-center" >
                    <img
                            src = "{{asset('images/hall-parameters/vertical.svg')}}"
                            alt = "{{trans("t_h_p.text.flat_roof_left")}}" >
                </label >
                <input
                        type = "radio"
                        id = "vertical"
                        class = "self-center"
                        name = "cladding_orientation"
                        value = "vertical" >
            </div >

        </div >


    </x-slot>

</x-hall-parameters::helpers.form-fieldset>