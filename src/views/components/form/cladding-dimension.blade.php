{{-- component html form cladding dimension --}}
@props([
    'method' => $method ,
    'roofType',
])

{{-- component wraper --}}
<div class = "mt-5 md:mt-10 bg-gray-100 dark:bg-gray-800" >

    {{-- img dimension--}}
{{--    <div class = "flex flex-col items-center md:flex-row md:justify-center " >--}}

{{--        --}}{{-- img  gable--}}
{{--            <img--}}
{{--                    src = "{{asset("images/hall-parameters/3d-$roofType.svg")}}"--}}
{{--                    alt = "3D object roof" >--}}

{{--    </div >--}}

    {{-- form content wraper --}}
    <div class = "py-5 flex justify-center text-center" >

        {{-- form --}}
        <form
                action = "{{route('cladding-dimension.store')}}"
                id = "form-construction"
                method = "post" >
            @csrf
            @method($method)

            {{-- roof --}}
                <div class="mt-5 pl-5 border-l-4 border-t-4 border-gray-500">
                    <x-hall-parameters::form.block.cladding-dimension-roof
                            :roofType="$roofType" />
                </div>


            {{-- yellow wall --}}
            <div class="mt-5 pl-5 border-l-4 border-t-4  border-yellow-400">

               {{-- 3d img --}}
                <x-hall-parameters::form.block.cladding-dimension-3d-img :roofType="$roofType"/>


                {{-- gable --}}
                <x-hall-parameters::form.block.cladding-dimension-gable-wall
                        colorWall="yellow"
                        :roofType="$roofType"
                />

                {{-- wall --}}
                <x-hall-parameters::form.block.cladding-dimension-wall
                        colorWall="yellow"
                        :roofType="$roofType"
                />


            </div>

            {{-- red wall --}}
            <div class="mt-5 pl-5 border-l-4 border-t-4  border-red-500">

                {{-- 3d img --}}
                <x-hall-parameters::form.block.cladding-dimension-3d-img :roofType="$roofType"/>
                
                {{-- wall --}}
                <x-hall-parameters::form.block.cladding-dimension-wall
                        colorWall="red"
                        :roofType="$roofType"
                />
            </div>

            {{-- green wall --}}
            <div class="mt-5 pl-5 border-l-4 border-t-4  border-green-500">

                {{-- 3d img --}}
                <x-hall-parameters::form.block.cladding-dimension-3d-img :roofType="$roofType"/>
                
                {{-- gable --}}
                <x-hall-parameters::form.block.cladding-dimension-gable-wall
                        colorWall="green"
                        :roofType="$roofType"
                />

                {{-- wall --}}
                <x-hall-parameters::form.block.cladding-dimension-wall
                        colorWall="green"
                        :roofType="$roofType"
                />
            </div>

            {{-- blue wall --}}
            <div class="mt-5 pl-5 border-l-4 border-t-4  border-blue-500">

                {{-- 3d img --}}
                <x-hall-parameters::form.block.cladding-dimension-3d-img :roofType="$roofType"/>
                
                {{-- wall --}}
                <x-hall-parameters::form.block.cladding-dimension-wall
                        colorWall="blue"
                        :roofType="$roofType"
                />
            </div>


            {{-- button --}}
            <button
                    class = "my-10"
                    type = "submit" >{{trans("t_h_p.text.save")}}</button >

        </form >
    </div >
</div >



