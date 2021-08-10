<x-hall-parameters::welcome_hall_parameters>
    <x-slot name="content">

        {{-- head --}}
        <h1>{{trans("t_h_p.text.cladding_dimension")}}</h1>

        <div class="text-center">{{trans("t_h_p.text.new")}}</div>


        {{-- form construction --}}
        <x-hall-parameters::form.cladding-dimension method="post" roofType="gable"/>


    </x-slot >
</x-hall-parameters::welcome_hall_parameters >


