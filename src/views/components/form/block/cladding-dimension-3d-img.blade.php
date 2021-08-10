{{-- componente cladding dimesion 3d img --}}

@props([
    "roofType"
])

<img class="m-3"
     src = "{{asset("images/hall-parameters/3d-$roofType.svg")}}"
     alt = "3D object roof"
     width="150"
>