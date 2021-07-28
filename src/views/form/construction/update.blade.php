<x-hall-parameters::welcome_hall_parameters>
    <x-slot name="content">

        {{-- content testing --}}
        <h1>Vytvářím formulář úprava</h1>


        <p>Formulář úpravu konstrukce</p>


        <form action="{{route('construction.update')}}" method="post">
            @csrf

            <input type="text">

            <button type="submit">Upravit</button>

        </form>

    </x-slot>
</x-hall-parameters::welcome_hall_parameters>


