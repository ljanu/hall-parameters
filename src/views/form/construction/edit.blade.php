<x-hall-parameters::welcome_hall_parameters>
    <x-slot name="content">

        {{-- content testing --}}
        <h1>Úprava dat konstrukce</h1>


        <p>Formulář úpravu konstrukce id: {{$id}}</p>

        {{-- base form use --}}
        <form action="{{route('construction.update', $id)}}" method="post">
            @csrf
            @method('put')

            <label for="form">Uprav</label>
            <input type="text" id="form" name="id" value="{{$id}}">

            <button type="submit">Upravit</button>

        </form>

    </x-slot>
</x-hall-parameters::welcome_hall_parameters>


