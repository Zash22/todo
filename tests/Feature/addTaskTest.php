<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class addTaskTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_addTask(): void
    {
        $post = ["item" => ["name"=>"foo"]];
        $response = $this->post('api/item/store', $post);
        $response->assertStatus(201);

        $items = $this->listTasks();

//        dd($items->decodeResponseJson()["data"][0]);

//        $items->content()["data"][0];

//        dd($items->content());
//
//        $response->assertContent()

        $response->ass

        $response->assertContent(json_encode($items->decodeResponseJson()["data"][0]));
    }

    public function listTasks () {
        $response = $this->get('api/items');

        $response->assertStatus(200);

        return $response;

    }
}
