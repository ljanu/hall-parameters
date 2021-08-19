{{-- component names contact --}}

<x-hall-parameters::helpers.form-fieldset :legend = "trans('t_h_p.text.contact')" >
    <x-slot name = "content" >

        {{-- company --}}
        <x-hall-parameters::helpers.form-item >

            <x-slot name = "label" >
                <label for = "company" >
                    {{trans("t_h_p.text.company")}}
                </label >
            </x-slot >

            <x-slot name = "input" >
                <input
                        type = "text"
                        name = "company"
                        id = "company"
                        class = "w-full"
                >
            </x-slot >

        </x-hall-parameters::helpers.form-item >

        {{-- first name --}}
        <x-hall-parameters::helpers.form-item >

            <x-slot name = "label" >
                <label for = "first_name" >
                    {{trans("t_h_p.text.first_name")}}
                </label >
            </x-slot >

            <x-slot name = "input" >
                <input
                        type = "text"
                        name = "first_name"
                        id = "first_name"
                        class = "w-full"
                >
            </x-slot >

        </x-hall-parameters::helpers.form-item >

        {{-- last name --}}
        <x-hall-parameters::helpers.form-item >

            <x-slot name = "label" >
                <label for = "last_name" >
                    {{trans("t_h_p.text.last_name")}}
                </label >
            </x-slot >

            <x-slot name = "input" >
                <input
                        type = "text"
                        name = "last_name"
                        id = "last_name"
                        class = "w-full"
                >
            </x-slot >

        </x-hall-parameters::helpers.form-item >

        {{-- email --}}
        <x-hall-parameters::helpers.form-item >

            <x-slot name = "label" >
                <label for = "email" >
                    {{trans("t_h_p.text.email")}}
                </label >
            </x-slot >

            <x-slot name = "input" >
                <input
                        type = "email"
                        name = "email"
                        id = "email"
                        class = "w-full"
                >
            </x-slot >

        </x-hall-parameters::helpers.form-item >

        {{-- phone --}}
        <x-hall-parameters::helpers.form-item >

            <x-slot name = "label" >
                <label for = "phone" >
                    {{trans("t_h_p.text.phone")}}
                </label >
            </x-slot >

            <x-slot name = "input" >
                <input
                        type = "text"
                        name = "phone"
                        id = "phone"
                        class = "w-full"
                >
            </x-slot >

        </x-hall-parameters::helpers.form-item >

    </x-slot >
</x-hall-parameters::helpers.form-fieldset >