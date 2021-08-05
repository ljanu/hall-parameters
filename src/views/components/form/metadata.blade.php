{{-- component html form metadata --}}
@props([
    'method' => $method
])

{{-- component wraper --}}
<div class = "mt-5 md:mt-10 bg-gray-100 dark:bg-gray-800" >


    {{-- form content wraper --}}
    <div class = "py-5 flex justify-center text-center " >

        {{-- form --}}
        <form
                action = "{{route('metadata.store')}}"
                id = "form-matadata"
                method = "post" >
            @csrf
            @method($method)



            {{-- basic items -------------------------------------------------------------------------------------------}}
            <fieldset class = "py-10 " >

                <div class = "m-title" >Základní položky</div >

                {{-- wrap basic items --}}
                <div class = "grid grid-cols-2" >


                    {{-- name --}}
                    <label
                            for = "name"
                            class = "text-right self-center" >name
                    </label >

                    <input
                            type = "text"
                            id = "name"
                            name = "name"
                            autofocus
                            class = "w-56"
                            value = ""
                    >


                    {{-- roof load --}}
                    <label
                            for = "roof_load"
                            class = "text-right self-center" > roof load
                    </label >

                    <select
                            name = "roof_load"
                            id = "roof_load"
                            class = "w-56"
                    >
                        <option value = "1" >zatížení 100 kg/m2</option >
                        <option value = "1" >zatížení 100 kg/m2</option >
                        <option value = "1" >zatížení 100 kg/m2</option >
                        <option value = "1" >zatížení 100 kg/m2</option >
                    </select >


                    {{-- insulates --}}
                    <label
                            for = "insulated"
                            class = "text-right self-center" >insulated
                    </label >
                    <select
                            name = "insulated"
                            id = "insulated"
                            class = "w-56"
                    >
                        <option value = "1" >zateplená</option >
                        <option value = "1" >nezateplená</option >
                        <option value = "1" >částečně zateplená</option >
                    </select >

                </div >

            </fieldset >

            {{-- colors -----------------------------------------------------------------------------------------------}}
            <fieldset class = "mt-4" >

                <div class = "m-title" >barevné provedení</div >

                {{-- wrap colors --}}
                <div class = "grid grid-cols-2 self-center" >


                    {{-- roof --}}
                    <label
                            for = "color_roof"
                            class = "text-right self-center" >color roof
                    </label >

                    <select
                            name = "color_roof"
                            id = "color_roof"
                            class = "w-56"
                    >
                        <option value = "1" >RAL 9002</option >
                        <option value = "1" >RAL 9006</option >
                        <option value = "1" >RAL 9007</option >
                    </select >


                    {{-- walls --}}
                    <label
                            for = "color_walls"
                            class = "text-right self-center" >color walls
                    </label >
                    <select
                            name = "color_walls"
                            id = "color_walls"
                            class = "w-56"
                    >
                        <option value = "1" >RAL 9002</option >
                        <option value = "1" >RAL 9006</option >
                        <option value = "1" >RAL 9007</option >
                    </select >


                    {{-- fill --}}
                    <label
                            for = "color_fill"
                            class = "text-right self-center" >color fill
                    </label >
                    <select
                            name = "color_fill"
                            id = "color_fill"
                            class = "w-56"
                    >
                        <option value = "1" >RAL 9002</option >
                        <option value = "1" >RAL 9006</option >
                        <option value = "1" >RAL 9007</option >
                    </select >


                    {{-- edges --}}
                    <label
                            for = "color_edges"
                            class = "text-right self-center" >color edges
                    </label >
                    <select
                            name = "color_edges"
                            id = "color_edges"
                            class = "w-56"
                    >
                        <option value = "1" >RAL 9002</option >
                        <option value = "1" >RAL 9006</option >
                        <option value = "1" >RAL 9007</option >
                    </select >


                    {{-- construction --}}
                    <label
                            for = "color_construction"
                            class = "text-right self-center" >color construction
                    </label >
                    <select
                            name = "color_construction"
                            id = "color_construction"
                            class = "w-56"
                    >
                        <option value = "1" >RAL 9002</option >
                        <option value = "1" >RAL 9006</option >
                        <option value = "1" >RAL 9007</option >
                    </select >

                </div >

            </fieldset >

            {{-- next items ------------------------------------------------------------------------------------------}}
            <fieldset class = "mt-14" >

                <div class = "m-title" >Další položky</div >

                {{-- orintation facade profile --}}
                <div class = "flex flex-row justify-center" >

                    <div >
                        <label
                                for = "horizontal"
                                class = "text-left self-center" >
                            <img
                                    src = "{{asset('images/hall-parameters/gable-roof.svg')}}"
                                    alt = "{{trans("t_h_p.text.gable_roof")}}" >
                        </label >

                        <input
                                type = "radio"
                                id = "horizontal"
                                class = "self-center"
                                name = "orientation_facade_profile"
                                value = "horizontal"
                                checked = "checked" >
                    </div >

                    {{-- flat  roof left --}}
                    <div class = "mx-5" >
                        <label
                                for = "vertical"
                                class = "text-right self-center" >
                            <img
                                    src = "{{asset('images/hall-parameters/flat-roof-left.svg')}}"
                                    alt = "{{trans("t_h_p.text.flat_roof_left")}}" >
                        </label >
                        <input
                                type = "radio"
                                id = "vertical"
                                class = "self-center"
                                name = "orientation_facade_profile"
                                value = "vertical" >
                    </div >

                </div >

                <div class="m-base grid grid-cols-2 self-center">
                    {{-- claen floor --}}
                    <label
                            for = "clean_floor"
                            class = "text-right self-center" >clean floor
                    </label >

                    <input
                            type = "text"
                            id = "clean_floor"
                            name = "clean_floor"
                            autofocus
                            class = "w-56"
                            value = ""
                    >

                    {{-- bottom edge facade --}}
                    <label
                            for = "bottom_edge_facade"
                            class = "text-right self-center" > bottom edge facade
                    </label >

                    <input
                            type = "number"
                            id = "bottom_edge_facade"
                            name = "bottom_edge_facade"
                            autofocus
                            class = "w-56"
                            value = ""
                            size="0.01"
                    >

                    {{--  fire resistance construction --}}
                    <label
                            for = "fire_resistance_construction"
                            class = "text-right self-center" >  fire resistance construction
                    </label >

                    <input
                            type = "number"
                            id = "fire_resistance_construction"
                            name = "fire_resistance_construction"
                            autofocus
                            class = "w-56"
                            value = ""
                    >

                    {{--  fire resistance cladding --}}
                    <label
                            for = "fire_resistance_construction"
                            class = "text-right self-center" >  fire resistance cladding
                    </label >

                    <input
                            type = "number"
                            id = "fire_resistance_cladding"
                            name = "fire_resistance_cladding"
                            autofocus
                            class = "w-56"
                            value = ""
                    >
                </div>

            </fieldset >


            {{-- button --}}
            <button
                    class = "my-10"
                    type = "submit" >{{trans("t_h_p.text.save")}}</button >

        </form >

    </div >

</div >



