{{-- component color design --}}

@php($colorsCladding = config('config_hall.ral_base'))

<fieldset class = "m-base" >

    <div class = "m-title" >{{trans("t_h_p.text.basic_color_design")}}</div >

    {{-- wrap colors --}}
    <div class = "grid grid-cols-2 self-center" >


        {{-- roof --}}
        <label
                for = "color_roof"
                class = "text-right self-center" >{{trans("t_h_p.text.color_roof")}}
        </label >

        <select
                name = "color_roof"
                id = "color_roof"
                class = "w-56"
        >
            @foreach ($colorsCladding as $color)
                <option
                        class = "{{'ral-'.$color}}"
                        value = "{{$color}}" >RAL {{$color}}</option >
            @endforeach
        </select >


        {{-- walls --}}
        <label
                for = "color_walls"
                class = "text-right self-center" >{{trans("t_h_p.text.color_walls")}}
        </label >
        <select
                name = "color_walls"
                id = "color_walls"
                class = "w-56"
        >
            @foreach ($colorsCladding as $color)
                <option
                        class = "{{'ral-'.$color}}"
                        value = "{{$color}}" >RAL {{$color}}</option >
            @endforeach
        </select >


        {{-- fill --}}
        <label
                for = "color_fill"
                class = "text-right self-center" >{{trans("t_h_p.text.color_fill")}}
        </label >
        <select
                name = "color_fill"
                id = "color_fill"
                class = "w-56"
        >
            @foreach ($colorsCladding as $color)
                <option
                        class = "{{'ral-'.$color}}"
                        value = "{{$color}}" >RAL {{$color}}</option >
            @endforeach
        </select >


        {{-- edges --}}
        <label
                for = "color_edges"
                class = "text-right self-center" >{{trans("t_h_p.text.color_edges")}}
        </label >
        <select
                name = "color_edges"
                id = "color_edges"
                class = "w-56"
        >
            @foreach ($colorsCladding as $color)
                <option
                        class = "{{'ral-'.$color}}"
                        value = "{{$color}}" >RAL {{$color}}</option >
            @endforeach
        </select >


        {{-- construction --}}
        <label
                for = "color_construction"
                class = "text-right self-center" >{{trans("t_h_p.text.color_construction")}}
        </label >
        <select
                name = "color_construction"
                id = "color_construction"
                class = "w-56"
        >
            <option
                    value = "7035" >RAL 7038</option >
        </select >

    </div >

</fieldset >