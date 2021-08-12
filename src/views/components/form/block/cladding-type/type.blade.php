{{-- component cladding type --}}
@props([
    "roofOrWall"
])

<fieldset >

    <legend class="m-title" >{{$roofOrWall}}</legend >

    <label for = "type_{{$roofOrWall}}" > cladding type</label >
    <select
            name = "type_{{$roofOrWall}}"
            id = "type_{{$roofOrWall}}" >
        <option value = "1" >PIR Kingsapan 1</option >
        <option value = "2" >PIR Kingsapan 2</option >
        <option value = "3" >PIR Kingsapan 3</option >
        <option value = "4" >PIR Kingsapan 4</option >
    </select >


{{--    <label for = "thickness_{{$roofOrWall}}" > thickness</label >--}}
{{--    <select--}}
{{--            name = "thickness_{{$roofOrWall}}"--}}
{{--            id = "thickness_{{$roofOrWall}}" >--}}
{{--        <option value = "80" >80</option >--}}
{{--        <option value = "100" >100</option >--}}
{{--        <option value = "200" >120</option >--}}
{{--        <option value = "300" >140</option >--}}
{{--    </select >--}}


</fieldset >