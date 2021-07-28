<x-hall-parameters::welcome_hall_parameters>
    <x-slot name="content">

        {{-- content testing --}}
        <h1>Vytvářím formulář úprava</h1>


        <p>Formulář úpravu konstrukce id: {{$id}}</p>

        {{-- base form use --}}
        <form action="{{route('construction.store')}}" method="post">
            @csrf

            <label for="form">Uprav</label>
            <input type="text" id="form" name="id" value="John">

            <button type="submit">Upravit</button>

        </form>

    </x-slot>
</x-hall-parameters::welcome_hall_parameters>


