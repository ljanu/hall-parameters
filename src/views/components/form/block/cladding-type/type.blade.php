{{-- component cladding type --}}
@props([
    "roofOrWall"
])

<fieldset >

    <legend class="m-title" >{{$roofOrWall}}</legend >

    <label for = "type_{{$roofOrWall}}" > type</label >
    <select
            name = "type_{{$roofOrWall}}"
            id = "type_{{$roofOrWall}}" >
        <option value = "1" >PIR Kingsapan 1</option >
        <option value = "2" >PIR Kingsapan 2</option >
        <option value = "3" >PIR Kingsapan 3</option >
        <option value = "4" >PIR Kingsapan 4</option >
    </select >


    <label for = "type_{{$roofOrWall}}" > thickness</label >
    <select
            name = "type_{{$roofOrWall}}"
            id = "type_{{$roofOrWall}}" >
        <option value = "1" >80</option >
        <option value = "1" >100</option >
        <option value = "2" >120</option >
        <option value = "3" >140</option >
    </select >


</fieldset >