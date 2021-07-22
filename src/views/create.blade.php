<x-dynamic-component :component="config('config_hall.layout_name')">
    <x-slot :name="config('config_hall.slot_name')">

        {{-- header --}}
        <h1>{{trans('t_h_p.text.hall_parameters')}}</h1>
        <p class="text-center">{{trans('t_h_p.text.new_entry')}}</p>

        {{-- form --}}
        <form action="{{route('hall-parameters.store')}}" method="post">
            @csrf

            <button type="submit"> {{trans('t_h_p.text.save_parameters')}}</button>

        </form>

    </x-slot>
</x-dynamic-component>

