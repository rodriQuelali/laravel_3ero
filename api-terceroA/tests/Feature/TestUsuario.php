<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TestUsuario extends TestCase
{
    /**
     * A basic feature test example.
     */
    protected $urls;
    protected $data;
    //seTup-->
    public function setUp() : void {
        parent::setUp();
        $this->artisan('migrate');
        $this->urls = '/api/register';
        $this->data = [
            'name'=>'alan brito',
            'email'=>'ala@gmai.com',
            'password'=>14555,
            'password_confirmation'=>22
        ];
    }

    //test registro
    public function test_register() {
        $data = $this->postJson($this->urls, $this->data);
        $data->assertStatus(201);

    }

    //crea test para datos incorrectos.
    public function test_resgistroincorrecto() {
        $data = $this->postJson($this->urls, [
            'name'=>'alan brito',
            'email'=>'almai.com',
            'password'=>'',
            'password_confirmation'=>14555
        ]);
        $data->assertStatus(422);
    }

    //crea test sin campos.

    public function test_resgistronull() {
        $data = $this->postJson($this->urls, [
            'name'=>'',
            'email'=>'',
            'password'=>'',
            'password_confirmation'=>''
        ]);
        $data->assertStatus(422);
    }
}


class TestLogin extends TestCase{

    


}
