{{-- component html form cladding dimension --}}
@props([
    'method' => $method ,
    'roofType',
])

{{-- component wraper --}}
<div class = "mt-5 md:mt-10 bg-gray-100 dark:bg-gray-800" >


    {{-- img dimension--}}
    <div class = "flex flex-col items-center md:flex-row md:justify-center " >

        {{-- img  gable--}}
        @if ($roofType == 'gable')
            <img
                    src = "{{asset('images/hall-parameters/3d-gable.svg')}}"
                    alt = "3D object roof gable" >
            
        @endif

        {{-- img  gable--}}
        @if ($roofType == 'flat-left')
            <img
                    src = "{{asset('images/hall-parameters/3d-flat-left.svg')}}"
                    alt = "3D object roof flat left" >

        @endif

        {{-- img  gable--}}
        @if ($roofType == 'flat-right')
            <img
                    src = "{{asset('images/hall-parameters/3d-flat-right.svg')}}"
                    alt = "3D object roof flat right" >

        @endif
  
    </div >

    {{-- form content wraper --}}
    <div class = "py-5 flex justify-center text-center " >

        {{-- form --}}
        <form
                action = "{{route('construction.store')}}"
                id = "form-construction"
                method = "post" >
            @csrf
            @method($method)




            {{-- button --}}
            <button
                    class = "my-10"
                    type = "submit" >{{trans("t_h_p.text.save")}}</button >

        </form >
    </div >
</div >



