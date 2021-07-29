<?php

namespace Tests\Feature\Cs;

use Tests\TestCase;


class ConstructionRoutesTest extends TestCase
{

    //methods get ---------------------------------------------------------

    public function test_route_get_construction_create_cs()
    {
        $response = $this->get('/hala-parametry/konstrukce/vytvorit');
        $response ->assertViewIs('hall-parameters::form.construction.create');
        $response->assertStatus(200);
    }





    public function test_route_get_construction_edit_cs()
    {
        $response = $this->get('/hala-parametry/konstrukce/1/upravit');
        $response->assertViewIs('hall-parameters::form.construction.edit');
        $response->assertStatus(200);
    }





    //method post ---------------------------------------------------------

    public function test_route_post_construction_store_cs()
    {
        $response = $this->post('/hala-parametry/konstrukce');

        $response->assertStatus(200);
    }





    //methods put ----------------------------------------------------
    public function test_route_put_construction_update_cs()
    {
        $response = $this->put('/hala-parametry/konstrukce/1');

        $response->assertStatus(200);
    }

}