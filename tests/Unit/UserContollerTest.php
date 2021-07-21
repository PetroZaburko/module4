<?php

namespace Tests\Unit;

use App\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class UserContollerTest extends TestCase
{
    use DatabaseTransactions;

    public function testUserStore()
    {
        $data = [
            'email' => 'test_user@mail.com',
            'password' => 'asdfg001',
            'password_confirmation'=> 'asdfg001',
            'name' => 'test_name',
            'vk' => 'test_vk'
        ];
        $user = factory(User::class)->create([
            'is_admin' => '1'
        ]);
        $response = $this->actingAs($user)->post('/user/store', $data);
        $response->assertStatus(302);
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

    public function testUserDelete()
    {
        $user = factory(User::class)->create([
            'is_admin' => '1'
        ]);
        $response = $this->actingAs($user)->get(route('users.delete', ['id' => $user->id]));
        $response->assertStatus(302);
        $this->assertDatabaseMissing('users', [
            'id' => $user->id
        ]);
        $this->assertDatabaseMissing('user_infos', [
            'user_id' => $user->id
        ]);
        $this->assertDatabaseMissing('user_links', [
            'user_id' => $user->id
        ]);
    }
}
