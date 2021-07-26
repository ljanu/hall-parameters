<x-hall-parameters::welcome_hall_parameters>
    <x-slot name="content">

        <h1>{{trans('t_h_p.text.list_object')}}</h1>

        {{-- TODO testy, --}}
        <p>seznam zadaných objektů</p>
        <a href="{{route(trans('t_h_p.routes.h_p_show'), '2')}}">Objekt id: 2</a>


    </x-slot>
</x-hall-parameters::welcome_hall_parameters>


