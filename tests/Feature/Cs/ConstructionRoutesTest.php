<?php

namespace Tests\Feature\Cs;

use Tests\TestCase;


class ConstructionRoutesTest extends TestCase
{

    //methods get ---------------------------------------------------------

    public function test_route_get_construction_create_cs()
    {
        $response = $this->get('/hala-parametry/konstrukce/vytvorit');
        $response ->assertViewIs('hall-parameters::construction.create');
        $response->assertStatus(200);
    }





    public function test_route_get_construction_edit_cs()
    {
        $response = $this->get('/hala-parametry/konstrukce/1/upravit');
        $response->assertViewIs('hall-parameters::construction.edit');
        $response->assertStatus(200);
    }


}