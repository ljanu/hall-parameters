<x-dynamic-component :component="config('config_hall.layout_name')">
    <x-slot :name="config('config_hall.slot_name')">

        {{-- header --}}
        <h1>{{__('hall parameters')}}</h1>
        <p class="text-center">{{__('new entry')}}</p>

        {{-- form --}}
        <form action="{{route('hall-parameters.store')}}" method="post">
            @csrf

            <button type="submit"> {{__('save parameters')}}</button>

        </form>

    </x-slot>
</x-dynamic-component>

