<?php

namespace Tests\Feature\Cs;

use Tests\TestCase;


class CladdingDimensionRoutesTest extends TestCase
{

    //methods get ---------------------------------------------------------

    public function test_route_get_cladding_dimension_create_cs()
    {
        $response = $this->get('/hala-parametry/rozmery-oplasteni/vytvorit');
        $response->assertViewIs('hall-parameters::cladding-dimension.create');
        $response->assertStatus(200);
    }





    public function test_route_get_cladding_dimension_edit_cs()
    {
        $response = $this->get('/hala-parametry/rozmery-oplasteni/1/upravit');
        $response->assertViewIs('hall-parameters::cladding-dimension.edit');
        $response->assertStatus(200);
    }


}