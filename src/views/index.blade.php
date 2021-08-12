<x-hall-parameters::welcome_hall_parameters>
    <x-slot name="content">

        <h1>{{trans('t_h_p.text.list_projects')}}</h1>

        {{-- url construction for testing--}}
        <ul >
            <li >
                <a href = "{{route(trans('t_h_p.routes.construction_create'))}}" >
                    {{trans("t_h_p.text.new_project")}}
                </a >
            </li >
            <li >
                <a href = "{{route(trans("t_h_p.routes.construction_edit") , '1')}}" >
                    {{trans("t_h_p.text.edit_project")}}
                </a >
            </li >
        </ul >
        <ul >
            <li >
                <a href = "{{route(trans("t_h_p.routes.specification_create"))}}" >{{trans("t_h_p.text.new_specification")}}</a >
            </li >
            <li >
                <a href = "{{route(trans("t_h_p.routes.specification_edit"), '1')}}" >{{trans("t_h_p.text.edit_specification")}}</a >
            </li >
        </ul >
        <ul >
            <li >
                <a href = "{{route(trans("t_h_p.routes.cladding_dimension_create"))}}" >{{trans("t_h_p.routes.cladding_dimension_create")}}</a >
            </li >
            <li >
                <a href = "{{route(trans("t_h_p.routes.cladding_dimension_edit"), '1')}}" >{{trans("t_h_p.routes.cladding_dimension_edit")}}</a >
            </li >
        </ul >

        <ul>
            <li>
                <a href = "{{route(trans("t_h_p.routes.cladding_type_create"))}}" > nový typ opláštění</a >
            </li>
            <li>
                <a href = "{{route(trans("t_h_p.routes.cladding_type_edit"), '1')}}" >úprava typu opláštění</a >
            </li>
        </ul>

        <ul>
            <li>
                <a href = "{{route(trans("t_h_p.routes.contact_create"))}}" >
                    {{trans("t_h_p.text.new")}} {{trans("t_h_p.text.contact")}}
                </a >
            </li>
            <li>
                <a href = "{{route(trans("t_h_p.routes.contact_edit"), '1')}}" >
                    {{trans("t_h_p.text.edit")}} {{trans("t_h_p.text.contact")}}
                </a >
            </li>
        </ul>


        {{-- url main for testing --}}
        <p >seznam zadaných objektů</p >
        <a href = "{{route(trans('t_h_p.routes.h_p_show'), '2')}}" >{{trans('t_h_p.text.project')}} id: 2</a >


    </x-slot >
</x-hall-parameters::welcome_hall_parameters >


