<?php

namespace Tests\Feature\En;

use Tests\TestCase;


class CladdingTypeRoutesTest extends TestCase
{

    //methods get ---------------------------------------------------------

    public function test_route_get_cladding_type_create_en()
    {
        // $this->withoutExceptionHandling();
        $response = $this->get('/hall-parameters/cladding-type/create');
        $response ->assertViewIs('hall-parameters::cladding-type.create');
        $response->assertStatus(200);
    }





    public function test_route_get_cladding_type_edit_en()
    {
        $response = $this->get('/hall-parameters/cladding-type/1/edit');
        $response->assertViewIs('hall-parameters::cladding-type.edit');
        $response->assertStatus(200);
    }





    //method post ---------------------------------------------------------

    public function test_route_post_cladding_type_store_en()
    {
        $response = $this->post('/hall-parameters/cladding-type');
        $response->assertStatus(200);
    }





    //methods put ----------------------------------------------------
    public function test_route_put_cladding_type_update_en()
    {
        $response = $this->put('/hall-parameters/cladding-type/1');
        $response->assertStatus(200);
    }

}