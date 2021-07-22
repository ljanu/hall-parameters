<x-dynamic-component :component="config('config_hall.layout_name')">
    <x-slot :name="config('config_hall.slot_name')">

        {{-- flash --}}
        @if ($message = Session::get('success'))
            <div class="m-10 p-2 text-green-500 text-center bg-white dark:bg-gray-700 " >
                <strong>{{ $message }}</strong>
            </div>
        @endif

        {{-- header --}}
        <h1>{{__('hall parameters')}}</h1>
        <p class="text-center" >{{__('list of specified objects')}}</p>


        
        {{-- navigation --}}
        <div><a href="{{route(trans('hall-parameters.create'))}}">{{__('new entry')}}</a></div>
        <div><a href="{{route(trans('hall-parameters.edit'), '1')}}">{{__('edit entry')}}</a></div>

        <form action="{{route('hall-parameters.destroy','1' )}}" method="post">
            @csrf
            @method('delete')

            <button type="submit">{{__('delete entry')}}</button>

        </form>


    </x-slot>
</x-dynamic-component>

