<x-hall-parameters::welcome_hall_parameters>
    <x-slot name="content">

       {{-- content testing --}}
        <h1>Vytvářím nový formulář</h1>


        <p>Formulář pro novou konstrukci</p>


        <form action="{{route('construction.create')}}" method="post">
            @csrf

            <input type="text">

            <button type="submit">Odeslat</button>

        </form>

    </x-slot>
</x-hall-parameters::welcome_hall_parameters>


