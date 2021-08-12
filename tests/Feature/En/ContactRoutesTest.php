<?php

namespace Tests\Feature\En;

use Tests\TestCase;


class ContactTypeRoutesTest extends TestCase
{

    //methods get ---------------------------------------------------------

    public function test_route_get_contact_create_en()
    {
        // $this->withoutExceptionHandling();
        $response = $this->get('/hall-parameters/contact/create');
        $response ->assertViewIs('hall-parameters::contact.create');
        $response->assertStatus(200);
    }





    public function test_route_get_contact_edit_en()
    {
        $response = $this->get('/hall-parameters/contact/1/edit');
        $response->assertViewIs('hall-parameters::contact.edit');
        $response->assertStatus(200);
    }





    //method post ---------------------------------------------------------

    public function test_route_post_contact_store_en()
    {
        $response = $this->post('/hall-parameters/contact');
        $response->assertStatus(200);
    }





    //methods put ----------------------------------------------------
    public function test_route_put_contact_update_en()
    {
        $response = $this->put('/hall-parameters/contact/1');
        $response->assertStatus(200);
    }

}