<?php

namespace Tests\Feature;

use Tests\TestCase;

class MainRoutesTest extends TestCase
{

    //methods get ---------------------------------------------------------

    //lang en
    public function test_route_get_hall_parameters_en()
    {
        $response = $this->get('/hall-parameters');
        $response->assertViewIs('hall-parameters::index');
        $response->assertStatus(200);
    }





    public function test_route_get_hall_parameters_hall_id_en()
    {
        $response = $this->get('/hall-parameters/1');
        $response->assertViewIs('hall-parameters::show');
        $response->assertViewHas('hall_id', '1');
        $response->assertStatus(200);
    }





    // lang cs
    public function test_route_get_hall_parameters_cs()
    {
        $response = $this->get('/hala-parametry');
        $response->assertViewIs('hall-parameters::index');
        $response->assertStatus(200);
    }





    public function test_route_get_hall_parameters_hall_id_cs()
    {
        $response = $this->get('/hala-parametry/1');
        $response->assertViewIs('hall-parameters::show');
        $response->assertViewHas('hall_id', '1');
        $response->assertStatus(200);
    }





    //method post ---------------------------------------------------------
//    public function test_route_post_hall_parameters_en()
//    {
//        $response = $this->post('/hall-parameters');
//
//        $response->assertStatus(302);
//    }





    //methods put ----------------------------------------------------
//    public function test_route_put_hall_parameters_en()
//    {
//        $response = $this->put('/hall-parameters/1');
//
//        $response->assertStatus(302);
//    }


    //methods delete ----------------------------------------------------
//    public function test_route_delete_hall_parameters_en()
//    {
//        $response = $this->delete('/hall-parameters/1');
//
//        $response->assertStatus(302);
//    }

}