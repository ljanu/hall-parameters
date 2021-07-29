<?php

namespace Tests\Feature\En;

use Tests\TestCase;


class ConstructionRoutesTest extends TestCase
{

    //methods get ---------------------------------------------------------

    public function test_route_get_construction_create_en()
    {
        $response = $this->get('/hall-parameters/construction/create');
        $response ->assertViewIs('hall-parameters::form.construction.create');
        $response->assertStatus(200);
    }





    public function test_route_get_construction_edit_en()
    {
        $response = $this->get('/hall-parameters/construction/1/edit');
        $response->assertViewIs('hall-parameters::form.construction.edit');
        $response->assertStatus(200);
    }





    //method post ---------------------------------------------------------

    public function test_route_post_construction_store_en()
    {
        $response = $this->post('/hall-parameters/construction');
        $response->assertStatus(200);
    }





    //methods put ----------------------------------------------------
    public function test_route_put_construction_update_en()
    {
        $response = $this->put('/hall-parameters/construction/1');
        $response->assertStatus(200);
    }

}