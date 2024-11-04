<?php

namespace Tests\Feature;

use App\Models\Categoria;
use App\Models\Producto;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;
use Illuminate\Http\Response as status;
use Illuminate\Support\Facades\Hash;

class TestProductos extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDatabase;

    protected static $urls;
    protected $data;
    protected $dataIngresarCategoria;
    protected $dataProducto;

    static public function setUpBeforeClass(): void
    {
        parent::setUpBeforeClass();
        self::$urls = "/api/producto";
        
    }
    //seTup-->
    public function setUp() : void {
        parent::setUp();
        $this->artisan('migrate');
        $this->dataIngresarCategoria = Categoria::factory()->create();
        $this->dataProducto = Producto::factory()->count(5)->for($this->dataIngresarCategoria)->create();
        
    }

    //listado de datos.
    public function test_list(){
       
        $user = User::factory()->create();

        $response = $this->postJson('/api/login',[
            'email' => $user->email,
            'password' => 'password' 
        ]);

        $response->assertStatus(status::HTTP_OK); 

        $response->assertJsonStructure(['token']);

        $token = $response->json('token');
        
        $data = $this->withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->getJson(self::$urls);

        $data->assertStatus(status::HTTP_OK);

        $this->assertEquals(count($this->dataProducto), count($data->json()));

    }

    public function test_list_detallado(){
        $user = User::factory()->create();


        $response = $this->postJson('/api/login',[
            'email' => $user->email,
            'password' => 'password' 
        ]);

        $response->assertStatus(status::HTTP_OK); 

        $response->assertJsonStructure(['token']);

        $token = $response->json('token');
        
        $data = $this->withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->getJson(self::$urls);

        $data->assertStatus(status::HTTP_OK);

        $this->assertEquals(count($this->dataProducto), count($data->json()));

        $datrespnse = $data->json();
       

        $this->assertEquals($this->dataIngresarCategoria->Nombre, $datrespnse[0]['nombreCategoria']);
    }
}
