<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_adaugare_user()
    {
        $adm = User::factory()->create();

        // $response = $this->actingAs($admin)->post('BlogController', ['name' => 'SOMETHING']);

        // var_dump(gettype($adm->email));
        // ob_flush();

        // $blog = Blog::where('id', $id);

        // $blog = Blog::where('id', $id);

        $id = $adm->id;

        $user_bd = User::where('id', $id)->first();

        $this->assertEquals($adm->email, $user_bd->email);
    }
}
