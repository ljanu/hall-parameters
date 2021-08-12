<?php

namespace Tests\Feature\Cs;

use Tests\TestCase;


class ContactTypeRoutesTest extends TestCase
{

    //methods get ---------------------------------------------------------

    public function test_route_get_contact_create_cs()
    {
        $response = $this->get('/hala-parametry/kontakt/vytvorit');
        $response->assertViewIs('hall-parameters::contact.create');
        $response->assertStatus(200);
    }





    public function test_route_get_contact_edit_cs()
    {
        $response = $this->get('/hala-parametry/kontakt/1/upravit');
        $response->assertViewIs('hall-parameters::contact.edit');
        $response->assertStatus(200);
    }


}