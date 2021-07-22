<?php

namespace Tests\Feature;

use Tests\TestCase;

class RoutesTest extends TestCase
{

    //methods get ---------------------------------------------------------
    public function test_route_get_hall_parameters_en()
    {
        $response = $this->get('/hall-parameters');

        $response->assertStatus(200);
    }





    public function test_route_get_hall_parameters_cs()
    {
        $response = $this->get('/hala-parametry');

        $response->assertStatus(200);
    }





    //method post ---------------------------------------------------------
    public function test_route_post_hall_parameters_en()
    {
        $response = $this->post('/hall-parameters');

        $response->assertStatus(302);
    }





    //methods put ----------------------------------------------------
    public function test_route_put_hall_parameters_en()
    {
        $response = $this->put('/hall-parameters/1');

        $response->assertStatus(302);
    }





    //methods delete ----------------------------------------------------
    public function test_route_delete_hall_parameters_en()
    {
        $response = $this->delete('/hall-parameters/1');

        $response->assertStatus(302);
    }

}