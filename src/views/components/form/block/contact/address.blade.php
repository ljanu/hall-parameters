{{-- component address contact --}}

<fieldset class="m-base grid grid-cols-2" >
    <legend class="m-title" >{{trans("t_h_p.text.address")}}</legend >

    {{-- address line 1 --}}
    <label class="text-right self-center" for = "address_line_1" > {{trans("t_h_p.text.address_line_1")}}</label >

    <input
            type = "text"
            name = "address_line_1"
            id = "address_line_1"
    >

    {{-- address line 2 --}}
    <label class="text-right self-center" for = "address_line_2" > {{trans("t_h_p.text.address_line_2")}}</label >

    <input
            type = "text"
            name = "address_line_2"
            id = "address_line_2"
    >

    {{-- city --}}
    <label class="text-right self-center" for = "city" > {{trans("t_h_p.text.city")}}</label >

    <input
            type = "text"
            name = "city"
            id = "city"
    >

    {{-- zip code --}}
    <label class="text-right self-center" for = "zip_code" > {{trans("t_h_p.text.zip_code")}}</label >

    <input
            type = "text"
            name = "zip_code"
            id = "zip_code"
    >

    {{-- region --}}
    <label class="text-right self-center" for = "region" > {{trans("t_h_p.text.region")}}</label >

    <input
            type = "text"
            name = "region"
            id = "region"
    >

    {{-- distance --}}
    <label class="text-right self-center" for = "distance" > {{trans("t_h_p.text.distance")}}</label >

    <input
            type = "text"
            name = "distance"
            id = "distance"
    >

    {{-- plot number --}}
    <label class="text-right self-center" for = "plot_number" > {{trans("t_h_p.text.plot_number")}}</label >

    <input
            type = "text"
            name = "plot_number"
            id = "plot_number"
    >

    {{-- country --}}
    <label class="text-right self-center" for = "country" > {{trans("t_h_p.text.country")}}</label >

    <input
            type = "text"
            name = "country"
            id = "country"
    >

</fieldset >