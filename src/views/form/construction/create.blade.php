<x-hall-parameters::welcome_hall_parameters>
    <x-slot name="content">

        {{-- head --}}
        <h1>{{trans("t_h_p.text.construction_parameters")}}</h1>

        <div class="text-center">{{trans("t_h_p.text.new")}}</div>


       {{-- content testing --}}
        <p>Formulář pro novou konstrukci (text test)</p>


        {{-- base form use --}}
        <form action="{{route('construction.store')}}" method="post">
            @csrf

            <label for="test_1">test 1</label>
            <input type="text" name="test_1">

            <button type="submit">{{trans("t_h_p.text.save")}}</button>

        </form>

    </x-slot>
</x-hall-parameters::welcome_hall_parameters>


