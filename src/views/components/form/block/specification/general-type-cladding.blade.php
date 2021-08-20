{{-- comoponent general type cladding and insulated--}}

{{-- general type cladding --}}
<x-hall-parameters::helpers.form-fieldset
        :legend="trans('t_h_p.text.general_type_cladding')">
    <x-slot name="content">

        {{-- roof --}}
        <x-hall-parameters::helpers.form-item>

            <x-slot name="label">

                <label for = "general_type_roof">
                    {{trans("t_h_p.text.roof")}}
                </label >

            </x-slot>

            <x-slot name="input">

                <select
                        name = "general_type_roof"
                        id = "general_type_roof"
                        class="w-full"
                >

                    <option value = "pir" >Pir panel</option >
                    <option value = "mineral" >Mineral panel</option >
                    <option value = "folded cladding" >Složený plášť</option >
                    <option value = "Trapezoidal metal sheet" >Trapezový plech</option >
                    <option value = "without cladding" >bez opláštění</option >
                </select >

            </x-slot>

        </x-hall-parameters::helpers.form-item>


        {{-- wall --}}
        <x-hall-parameters::helpers.form-item>

            <x-slot name="label">

                <label for = "general_type_wall">
                    {{trans("t_h_p.text.wall")}}
                </label >

            </x-slot>

            <x-slot name="input">

                <select
                        name = "general_type_wall"
                        id = "general_type_wall"
                        class="w-full"
                >

                    <option value = "pir" >Pir panel</option >
                    <option value = "mineral" >Mineral panel</option >
                    <option value = "folded cladding" >Složený plášť</option >
                    <option value = "Trapezoidal metal sheet" >Trapezový plech</option >
                    <option value = "without cladding" >bez opláštění</option >

                </select >

            </x-slot>
        </x-hall-parameters::helpers.form-item>

    </x-slot>

</x-hall-parameters::helpers.form-fieldset>

{{-- insulated --}}
<x-hall-parameters::helpers.form-fieldset :legend="trans('t_h_p.text.insulated')">
    
    <x-slot name="content">

        <x-hall-parameters::helpers.form-item>

            <x-slot name="label">

                <label
                        for = "insulated"
                        class = "text-right self-center" >{{trans("t_h_p.text.insulated")}}
                </label >

            </x-slot>

            <x-slot name="input">

                <select
                        name = "insulated"
                        id = "insulated"
                        class = "w-full"
                >

                    <option value = "yes" >{{trans("t_h_p.text.yes")}}</option >
                    <option value = "no" >{{trans("t_h_p.text.no")}}</option >
                </select >

            </x-slot>
        </x-hall-parameters::helpers.form-item>

    </x-slot>

</x-hall-parameters::helpers.form-fieldset>