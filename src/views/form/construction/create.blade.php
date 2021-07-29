<x-hall-parameters::welcome_hall_parameters>
    <x-slot name="content">

       {{-- content testing --}}
        <h1>Nové zadání konstrukce</h1>


        <p>Formulář pro novou konstrukci</p>


        {{-- base form use --}}
        <form action="{{route('construction.store')}}" method="post">
            @csrf

            <label for="test_1">test 1</label>
            <input type="text" name="test_1">

            <button type="submit">Odeslat</button>

        </form>

    </x-slot>
</x-hall-parameters::welcome_hall_parameters>


