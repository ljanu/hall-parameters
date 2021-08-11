<?php

namespace Tests\Feature\Cs;

use Tests\TestCase;


class CladdingTypeRoutesTest extends TestCase
{

    //methods get ---------------------------------------------------------

    public function test_route_get_cladding_type_create_cs()
    {
        $response = $this->get('/hala-parametry/typ-oplasteni/vytvorit');
        $response->assertViewIs('hall-parameters::cladding-type.create');
        $response->assertStatus(200);
    }





    public function test_route_get_cladding_type_edit_cs()
    {
        $response = $this->get('/hala-parametry/typ-oplasteni/1/upravit');
        $response->assertViewIs('hall-parameters::cladding-type.edit');
        $response->assertStatus(200);
    }


}