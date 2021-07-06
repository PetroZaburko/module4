<?php

namespace Tests\Unit;

use App\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class UserContollerTest extends TestCase
{
    use DatabaseTransactions;

    public function testUserControllerActionStore()
    {
        $data = [
            'email' => 'test_user@mail.com',
            'password' => 'asdfg001',
            'password_confirmation'=> 'asdfg001',
            'name' => 'test_name',
            'vk' => 'test_vk'
        ];
        $user = User::where('is_admin', 1)->first();
        $response = $this->actingAs($user)->post('/user/store', $data);
        $response->assertStatus(302);
        $response->assertRedirect('/users');
        $response->assertSessionHas('message', 'New user - ' . $data['name'] . ' was successful created');
        $this->assertDatabaseHas('users', [
            'email' => $data['email']
        ]);
        $this->assertDatabaseHas('user_infos', [
            'name' => $data['name']
        ]);
        $this->assertDatabaseHas('user_links', [
            'vk' => $data['vk']
        ]);
    }

    public function testUserControllerActionDelete()
    {
        $userId = rand(1, 10);
        $user = User::find($userId);
        $deleteId = rand(1, 10);
        $response = $this->actingAs($user)->get(route('users.delete', ['id' => $deleteId]));
        $response->assertStatus(302);
        if($userId == $deleteId) {
            $response->assertRedirect('/login');
            $this->assertGuest();
        }else {
            $response->assertRedirect('/users');
            $this->assertAuthenticated();
        }
        $this->assertDatabaseMissing('users', [
            'id' => $deleteId
        ]);
        $this->assertDatabaseMissing('user_infos', [
            'user_id' => $deleteId
        ]);
        $this->assertDatabaseMissing('user_links', [
            'user_id' => $deleteId
        ]);
    }
}
