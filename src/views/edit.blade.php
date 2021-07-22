<x-dynamic-component :component="config('config_hall.layout_name')">
    <x-slot :name="config('config_hall.slot_name')">

        {{-- header --}}
        <h1>{{__('hall parameters')}}</h1>
        <p class="text-center">{{__('edit entry')}}</p>
        {{-- form --}}
        <form action="{{route("hall-parameters.update", "1" ) }}" method="post">
            @csrf
            @method('put')

            <input type="text">

            <button type="submit"> {{__('edit parameters')}}</button>

        </form>

    </x-slot>
</x-dynamic-component>

