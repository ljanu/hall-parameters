<?php

namespace Tests\Feature\En;

use Tests\TestCase;


class CladdingDimensionRoutesTest extends TestCase
{

    //methods get ---------------------------------------------------------

    public function test_route_get_cladding_dimension_create_en()
    {
        // $this->withoutExceptionHandling();
        $response = $this->get('/hall-parameters/cladding-dimension/create');
        $response ->assertViewIs('hall-parameters::cladding-dimension.create');
        $response->assertStatus(200);
    }





    public function test_route_get_cladding_dimension_edit_en()
    {
        $response = $this->get('/hall-parameters/cladding-dimension/1/edit');
        $response->assertViewIs('hall-parameters::cladding-dimension.edit');
        $response->assertStatus(200);
    }





    //method post ---------------------------------------------------------

    public function test_route_post_cladding_dimension_store_en()
    {
        $response = $this->post('/hall-parameters/cladding-dimension');
        $response->assertStatus(200);
    }





    //methods put ----------------------------------------------------
    public function test_route_put_cladding_dimension_update_en()
    {
        $response = $this->put('/hall-parameters/cladding-dimension/1');
        $response->assertStatus(200);
    }

}