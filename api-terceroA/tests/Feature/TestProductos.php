<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;

class TestProductos extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDatabase;

    public function setUp(): void{
        parent::setUp();
        $this->artisan('migrate');
    }


    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_producto(){
        //Artisan::all('migrate');
        $data = $this->postJson('/api/register', [
            'name'=>"ssss",
            'email'=>"hhhh@gmail.com",
            'password'=>1222,
            'password_confirmation' => 1222,
        ]);
        $data->assertStatus(201);

    }
}
