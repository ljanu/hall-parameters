{{-- comoponent general type cladding and insulated--}}

{{-- general type cladding --}}
<fieldset class = "m-base grid grid-cols-2" >
    <legend class = "m-title" >{{trans("t_h_p.text.general_type_cladding")}}</legend >

    {{-- roof --}}
    <label
            for = "general_type_roof"
            class = "text-right self-center" >{{trans("t_h_p.text.roof")}}</label >
    <select
            name = "general_type_roof"
            id = "general_type_roof" >

        <option value = "pir" >Pir panel</option >
        <option value = "mineral" >Mineral panel</option >
        <option value = "folded cladding" >Složený plášť</option >
        <option value = "Trapezoidal metal sheet" >Trapezový plech</option >
        <option value = "without cladding" >bez opláštění</option >
    </select >

    {{-- wall --}}
    <label
            for = "general_type_wall"
            class = "text-right self-center" >{{trans("t_h_p.text.wall")}}</label >
    <select
            name = "general_type_wall"
            id = "general_type_wall" >

        <option value = "pir" >Pir panel</option >
        <option value = "mineral" >Mineral panel</option >
        <option value = "folded cladding" >Složený plášť</option >
        <option value = "Trapezoidal metal sheet" >Trapezový plech</option >
        <option value = "without cladding" >bez opláštění</option >
    </select >

</fieldset >


{{-- insulated --}}
<fieldset class="m-base" >
    <legend class = "m-title" >{{trans("t_h_p.text.insulated")}}</legend >

    <label
            for = "insulated"
            class = "text-right self-center" >{{trans("t_h_p.text.insulated")}}
    </label >

    <select
            name = "insulated"
            id = "insulated"
            class = "w-56"
    >
        <option value = "yes" >{{trans("t_h_p.text.yes")}}</option >
        <option value = "no" >{{trans("t_h_p.text.no")}}</option >
    </select >

</fieldset >