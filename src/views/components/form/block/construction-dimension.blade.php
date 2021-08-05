{{-- component construction dimension --}}

<fieldset class = "py-10 " >
    <div class = "m-title" >{{trans("t_h_p.text.dimension")}}</div >

    {{-- dimension --}}
    <div class = "flex flex-col items-center md:flex-row " >

        {{-- width --}}
        <div class = "flex flex-row" >

            <label for = "width" >
                <img
                        src = "{{asset('images/hall-parameters/width.svg')}}"
                        alt = "{{trans("t_h_p.text.width")}}"
                >
            </label >

            <input
                    type = "number"
                    id = "width"
                    name = "width"
                    autofocus
                    class = "w-36"
                    placeholder = "{{trans("t_h_p.text.width")}} (m)"
                    value = ""
                    step = "0.01"
            >

        </div >

        {{-- lenght --}}
        <div class = "flex flex-row" >

            <label for = "length" >
                <img
                        src = "{{asset('images/hall-parameters/length.svg')}}"
                        alt = "{{trans("t_h_p.text.length")}}"
                >
            </label >

            <input
                    type = "number"
                    id = "length"
                    name = "length"
                    class = "w-36"
                    placeholder = "{{trans("t_h_p.text.length")}} (m)"
                    value = ""
                    step = "0.01"
            >

        </div >

        {{-- height --}}
        <div class = "flex flex-row" >
            <label for = "height" >
                <img
                        src = "{{asset('images/hall-parameters/height.svg')}}"
                        alt = "{{trans("t_h_p.text.height")}}" >
            </label >

            <input
                    type = "number"
                    id = "height"
                    name = "height"
                    class = "w-36"
                    placeholder = "{{trans("t_h_p.text.height")}} (m)"
                    value = ""
                    step = "0.01" >
        </div >

    </div >

</fieldset >