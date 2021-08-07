<?php

namespace Tests\Feature\Cs;

use Tests\TestCase;


class SpecificationRoutesTest extends TestCase
{

    //methods get ---------------------------------------------------------

    public function test_route_get_specification_create_cs()
    {
        // $this->withoutExceptionHandling();
        $response = $this->get('/hala-parametry/specifikace/vytvorit');
        $response ->assertViewIs('hall-parameters::specification.create');
        $response->assertStatus(200);
    }





    public function test_route_get_specification_edit_cs()
    {
        $response = $this->get('/hala-parametry/specifikace/1/upravit');
        $response->assertViewIs('hall-parameters::specification.edit');
        $response->assertStatus(200);
    }





    //method post ---------------------------------------------------------

    public function test_route_post_specification_store_cs()
    {
        $response = $this->post('/hala-parametry/specifikace');
        $response->assertStatus(200);
    }





    //methods put ----------------------------------------------------
    public function test_route_put_specification_update_cs()
    {
        $response = $this->put('/hala-parametry/specifikace/1');
        $response->assertStatus(200);
    }

}