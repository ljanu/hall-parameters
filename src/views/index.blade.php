<x-hall-parameters::welcome_hall_parameters>
    <x-slot name="content">

        <h1>{{trans('t_h_p.text.list_projects')}}</h1>

        {{-- url construction for testing--}}
        <ul>
            <li>
                <a href="{{route(trans('t_h_p.routes.construction_create'))}}">
                    {{trans("t_h_p.text.new_project")}}
                </a>
            </li>
            <li>
                <a href="{{route(trans("t_h_p.routes.construction_edit") , '1')}}">
                    {{trans("t_h_p.text.edit_project")}}
                </a>
            </li>
            <li>
                <a href = "{{route("specification.create")}}" > new Metadata</a >
            </li>
            <li>
                <a href = "{{route("specification.edit", '1')}}" > edit Metadata</a >
            </li>
        </ul>


        {{-- url main for testing --}}
        <p>seznam zadaných objektů</p>
        <a href="{{route(trans('t_h_p.routes.h_p_show'), '2')}}">{{trans('t_h_p.text.project')}} id: 2</a>


    </x-slot>
</x-hall-parameters::welcome_hall_parameters>


