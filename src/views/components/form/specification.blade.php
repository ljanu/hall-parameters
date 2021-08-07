{{-- component html form specification --}}
@props([
    'method' => $method
])

{{-- component wraper --}}
<div class = "mt-5 md:mt-10 bg-gray-100 dark:bg-gray-800" >


    {{-- form content wraper --}}
    <div class = "py-5 flex justify-center text-center " >

        {{-- form --}}
        <form
                action = "{{route('specification.store')}}"
                id = "form-metadata"
                method = "post" >
            @csrf
            @method($method)



            {{-- specification -------------------------------------------------------------------------------------------}}
            <x-hall-parameters::form.block.specification-specification />



            {{-- color design -----------------------------------------------------------------------------------------------}}
            <x-hall-parameters::form.block.specification-color-design/>


            {{-- clading orinetation ------------------------------------------------------------------------------------------}}
            <x-hall-parameters::form.block.specification-cladding-orientation/>


            {{-- foundation --}}
            <x-hall-parameters::form.block.specification-foundation/>


            {{-- fire resistance --}}
            <x-hall-parameters::form.block.specification-fire-resistance/>



            {{-- button --}}
            <button
                    class = "my-10"
                    type = "submit" >{{trans("t_h_p.text.save")}}</button >

        </form >

    </div >

</div >



