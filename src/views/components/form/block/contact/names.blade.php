{{-- component names contact --}}

<fieldset class = "m-base grid grid-cols-2" >
    <legend class = "m-title" >{{trans("t_h_p.text.contact")}}</legend >

    {{-- company --}}
    <label class="text-right self-center" for = "company" > {{trans("t_h_p.text.company")}}</label >

    <input
            type = "text"
            name = "company"
            id = "company"
    >

    {{-- first name --}}
    <label class="text-right self-center" for = "first_name" > {{trans("t_h_p.text.first_name")}}</label >

    <input
            type = "text"
            name = "first_name"
            id = "first_name"
    >

    {{-- lasta name --}}
    <label class="text-right self-center" for = "last_name" > {{trans("t_h_p.text.last_name")}}</label >

    <input
            type = "text"
            name = "last_name"
            id = "last_name"
    >

    {{-- email --}}
    <label class="text-right self-center" for = "email" > {{trans("t_h_p.text.email")}}</label >

    <input
            type = "email"
            name = "email"
            id = "email"
    >

    {{-- phone --}}
    <label class="text-right self-center" for = "phone" > {{trans("t_h_p.text.phone")}}</label >

    <input
            type = "text"
            name = "phone"
            id = "phone"
    >


</fieldset >