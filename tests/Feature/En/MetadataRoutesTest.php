<?php

namespace Tests\Feature\En;

use Tests\TestCase;


class MetadataRoutesTest extends TestCase
{

    //methods get ---------------------------------------------------------

    public function test_route_get_metadata_create_en()
    {
        // $this->withoutExceptionHandling();
        $response = $this->get('/hall-parameters/metadata/create');
//        $response ->assertViewIs('hall-parameters::form.construction.create');
        $response->assertStatus(200);
    }





    public function test_route_get_metadata_edit_en()
    {
        $response = $this->get('/hall-parameters/metadata/1/edit');
      //  $response->assertViewIs('hall-parameters::form.construction.edit');
        $response->assertStatus(200);
    }





    //method post ---------------------------------------------------------

    public function test_route_post_metadata_store_en()
    {
        $response = $this->post('/hall-parameters/metadata');
        $response->assertStatus(200);
    }





    //methods put ----------------------------------------------------
    public function test_route_put_metadata_update_en()
    {
        $response = $this->put('/hall-parameters/metadata/1');
        $response->assertStatus(200);
    }

}