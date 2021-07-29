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
    //cesta k souboru
  $path = asset("/icon/md/$name.svg") ;
    // přečte obsah souboru
  $svg = file_get_contents( $path);

@endphp


{{-- Doplní do řetezce svg barvu a velikost --}}
{!! Str::replaceArray('?', [ $color, $colorDark , $colorHover, $colorHoverDark, $size, $size], $svg) !!}
