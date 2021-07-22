<x-dynamic-component :component="config('config_hall.layout_name')">
    <x-slot :name="config('config_hall.slot_name')">

        {{-- header --}}
        <h1>{{trans('t_h_p.text.hall_parameters')}}</h1>
        <p class="text-center">{{trans('t_h_p.text.edit_entry')}}</p>
        {{-- form --}}
        <form action="{{route(trans('t_h_p.routes.h_p_update'), "1" ) }}" method="post">
            @csrf
            @method('put')

            <input type="text">

            <button type="submit"> {{trans('t_h_p.text.edit_entry')}}</button>

        </form>

    </x-slot>
</x-dynamic-component>

