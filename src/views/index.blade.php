<x-dynamic-component :component="config('config_hall.layout_name')">
    <x-slot :name="config('config_hall.slot_name')">

        {{-- flash --}}
        @if ($message = Session::get('success'))
            <div class="m-10 p-2 text-green-500 text-center bg-white dark:bg-gray-700 " >
                <strong>{{ $message }}</strong>
            </div>
        @endif

        {{-- header --}}
        <h1>{{__('t_h_p.text.hall_parameters')}}</h1>
        <p class="text-center" >{{trans('t_h_p.text.list_object')}}</p>


        
        {{-- navigation --}}
        <div><a href=" {{route(trans('t_h_p.routes.h_p_create'))}}">{{trans('t_h_p.text.new_entry')}}</a></div>
        <div><a href="{{route(trans('hall-parameters.edit'), '1')}}">{{trans('t_h_p.text.edit_entry')}}</a></div>


        <form action="{{route(trans('t_h_p.routes.h_p_destroy'),'1' )}}" method="post">
            @csrf
            @method('delete')

            <button type="submit">{{trans('t_h_p.text.delete_entry')}}</button>

        </form>

    </x-slot>
</x-dynamic-component>

