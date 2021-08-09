<x-hall-parameters::welcome_hall_parameters>
    <x-slot name="content">

        {{-- head --}}
        <h1>Cladding dimension</h1>

        <div class="text-center">{{trans("t_h_p.text.edit")}}</div>


        <p>Formulář úpravu cladding dimension id: {{$id}} (test text)</p>

        {{-- base form use --}}
        <form action="{{route('cladding-dimension.update', $id)}}" method="post">
            @csrf
            @method('put')

            <label for="form">Uprav</label>
            <input type="text" id="form" name="id" value="{{$id}}">

            <button type="submit">{{trans("t_h_p.text.edit")}}</button>

        </form>

    </x-slot>
</x-hall-parameters::welcome_hall_parameters>


