<?php

namespace Tests\Feature\En;

use Tests\TestCase;


class SpecificationRoutesTest extends TestCase
{

    //methods get ---------------------------------------------------------

    public function test_route_get_specification_create_en()
    {
        // $this->withoutExceptionHandling();
        $response = $this->get('/hall-parameters/specification/create');
        $response ->assertViewIs('hall-parameters::specification.create');
        $response->assertStatus(200);
    }





    public function test_route_get_specification_edit_en()
    {
        $response = $this->get('/hall-parameters/specification/1/edit');
        $response->assertViewIs('hall-parameters::specification.edit');
        $response->assertStatus(200);
    }





    //method post ---------------------------------------------------------

    public function test_route_post_specification_store_en()
    {
        $response = $this->post('/hall-parameters/specification');
        $response->assertStatus(200);
    }





    //methods put ----------------------------------------------------
    public function test_route_put_specification_update_en()
    {
        $response = $this->put('/hall-parameters/specification/1');
        $response->assertStatus(200);
    }

}