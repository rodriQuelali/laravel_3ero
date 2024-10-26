<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use Illuminate\Http\Response as status;

class TestUsuario extends TestCase
{
    /**
     * A basic feature test example.
     */
    protected static $urls;
    protected $data;
    protected $dataIngresar;

    static public function setUpBeforeClass(): void
    {
        parent::setUpBeforeClass();
        self::$urls = "/api";
        
    }
    //seTup-->
    public function setUp() : void {
        parent::setUp();
        $this->artisan('migrate');
        $this->dataIngresar = User::factory()->count(1000)->create();
        
    }

    //test registro
    public function test_register() {

        $data = $this->postJson(self::$urls.'/register', [
            'name'=>'alan brito',
            'email'=>'almai@gmail.com',
            'password'=>14555,
            'password_confirmation'=>14555
        ]);
        $data->assertStatus(201);

    }

    public function test_list(){
        $response = $this->getJson(self::$urls.'/list');
        $responseJson = $response->json();
        print_r($responseJson);
        $response->assertStatus(status::HTTP_OK);

    }

    //crea test para datos incorrectos.
    public function test_resgistroincorrecto() {
        $data = $this->postJson(self::$urls.'/register', [
            'name'=>'alan brito',
            'email'=>'almai.com',
            'password'=>'',
            'password_confirmation'=>14555
        ]);
        $data->assertStatus(422);
    }

    //crea test sin campos.

    public function test_resgistronull() {
        $data = $this->postJson(self::$urls.'/register', [
            'name'=>'',
            'email'=>'',
            'password'=>'',
            'password_confirmation'=>''
        ]);
        $data->assertStatus(422);
    }
}

