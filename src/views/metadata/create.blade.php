<x-hall-parameters::welcome_hall_parameters>
    <x-slot name="content">

        {{-- head --}}
        <h1 >Form metadata</h1 >

        <div class = "text-center" >{{trans("t_h_p.text.new")}}</div>


        {{-- form metadata --}}
        <x-hall-parameters::form.metadata method="post" />


    </x-slot >
</x-hall-parameters::welcome_hall_parameters >


