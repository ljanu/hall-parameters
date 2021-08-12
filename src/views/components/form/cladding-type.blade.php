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
                action = "{{route('cladding-type.store')}}"
                id = "form-construction"
                method = "post" >
            @csrf
            @method($method)

            {{-- roof --}}
            <x-hall-parameters::form.block.cladding-type.type roofOrWall="roof"/>

            {{-- wall --}}
            <x-hall-parameters::form.block.cladding-type.type roofOrWall="wall"/>



            {{-- button --}}
            <button
                    class = "my-10"
                    type = "submit" >{{trans("t_h_p.text.save")}}
            </button >

        </form >
    </div >
</div >



