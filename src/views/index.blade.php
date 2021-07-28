<x-hall-parameters::welcome_hall_parameters>
    <x-slot name="content">

        <h1>{{trans('t_h_p.text.list_object')}}</h1>

        {{-- url construction for testing--}}
        <ul>
            <li><a href="{{route("construction.create")}}"> nová konstrukce</a></li>
            <li><a href="{{route("construction.edit", '1')}}"> úprava konstrukce id :1</a></li>
        </ul>



        {{-- url main for testing --}}
        <p>seznam zadaných objektů</p>
        <a href="{{route(trans('t_h_p.routes.h_p_show'), '2')}}">Objekt id: 2</a>


    </x-slot>
</x-hall-parameters::welcome_hall_parameters>


