<x-hall-parameters::welcome_hall_parameters>
    <x-slot name="content">

        {{-- head --}}
        <h1>{{trans("t_h_p.text.contact")}}</h1>

        <div class="text-center">{{trans("t_h_p.text.new")}}</div>


        {{-- form contact --}}
        <x-hall-parameters::form.contact method="post"/>


    </x-slot>
</x-hall-parameters::welcome_hall_parameters>


