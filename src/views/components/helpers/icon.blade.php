{{-- Komponenta pro zobrazení ikon svg --}}
@props([
    'name',
    'size'=> 8,
    'color' => 'black',
    'colorDark' => 'white',
    'colorHover' => 'black',
    'colorHoverDark' => 'white',
])
@php
  $path = asset("/images/hall-parameters/icons/$name.svg") ;
  $svg = file_get_contents( $path);

@endphp


{{-- Doplní do řetezce svg barvu a velikost --}}
{!! Str::replaceArray('?', [ $color, $colorDark , $colorHover, $colorHoverDark, $size, $size], $svg) !!}
