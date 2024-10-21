<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use Illuminate\Http\Response as status;

class VentasTest extends TestCase
{
    
    protected static $urls;
    //setClass -- se solo una sol vez, carga todo los datos URLS
    static public function setUpBeforeClass(): void
    {
        parent::setUpBeforeClass();
        self::$urls = "/api/ventas";
        
    }

    //setUp
    public function setUp(): void {
        parent::setUp();
        $this->artisan("migrate");
        
    }

    public function test_list(){
        $response = $this->getJson(self::$urls);
        //print($response->json());

        $responseJson = $response->json();
        $response->assertStatus(status::HTTP_OK);

        $this->assertEquals([], $responseJson);
    }

    /*public function test_register() {
        $this->assertIsBool(true);
    }*/
}
