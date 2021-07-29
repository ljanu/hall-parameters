<x-dynamic-component :component="config('config_hall.layout_name')">
    <x-slot :name="config('config_hall.slot_name')">

       <div class="border-t border-red-500">

           <x-hall-parameters::html.back/>

           {{-- flash --}}
           @if ($message = Session::get('success'))
               <div class="m-10 p-2 text-green-500 text-center bg-white dark:bg-gray-700 ">
                   <strong>{{ $message }}</strong>
               </div>
           @endif

           {{$content }}
       </div>

    </x-slot>
</x-dynamic-component>