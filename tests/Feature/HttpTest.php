<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class HttpTest extends TestCase
{
    public function testGet()
    {
        $response = Http::get('https://eopiqnhh5vq8nju.m.pipedream.net');
        self::assertTrue($response->ok());
    }

    public function testPost()
    {
        $response = Http::post('https://eopiqnhh5vq8nju.m.pipedream.net');
        self::assertTrue($response->ok());
    }

    public function testDelete()
    {
        $response = Http::delete('https://eopiqnhh5vq8nju.m.pipedream.net');
        self::assertTrue($response->ok());
    }

    public function testResponse()
    {
        $response = Http::get('https://eopiqnhh5vq8nju.m.pipedream.net');
        self::assertEquals(200, $response->status());
        self::assertNotNull($response->headers());
        self::assertNotNull($response->body());

        // $json =  $response->json();
        // self::assertTrue($json['success']);
    }
}
