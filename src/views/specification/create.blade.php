<x-hall-parameters::welcome_hall_parameters>
    <x-slot name="content">

        {{-- head --}}
        <h1 >{{trans("t_h_p.text.specification")}}</h1 >

        <div class = "text-center" >{{trans("t_h_p.text.new")}}</div>


        {{-- form specification --}}
        <x-hall-parameters::form.specification method="post"/>



    </x-slot >
</x-hall-parameters::welcome_hall_parameters >


