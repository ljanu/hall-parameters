{{-- component html form cladding dimension --}}
@props([
    'method' => $method ,
])

{{-- component wraper --}}
<div class = "mt-5 md:mt-10 bg-gray-100 dark:bg-gray-800" >


    {{-- form content wraper --}}
    <div class = "py-5 flex justify-center text-center" >

        {{-- form --}}
        <form
                action = "{{route('contact.store')}}"
                id = "form-construction"
                method = "post" >
            @csrf
            @method($method)

            {{-- names --}}
            <x-hall-parameters::form.block.contact.names />

            {{-- address --}}
            <x-hall-parameters::form.block.contact.address />


            {{-- button --}}
            <button
                    class = "my-10"
                    type = "submit" >{{trans("t_h_p.text.save")}}</button >

        </form >
    </div >
</div >



