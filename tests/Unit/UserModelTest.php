<?php

namespace Tests\Unit;

use App\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class UserModelTest extends TestCase
{
    use DatabaseTransactions;

    public function testCreateUser()
    {
        $data = [
            'email' => 'test_user@mail.com',
            'password' => 'asdfg001',
            'name' => 'test_name'
        ];
        $user = User::create($data);
        $user->info()->create($data);
        $user->links()->create($data);
        $this->assertDatabaseHas('users', [
            'email' => $data['email']
        ]);
        $this->assertDatabaseHas('user_infos', [
            'user_id' => $user->id,
            'name' => $data['name']
        ]);
        $this->assertDatabaseHas('user_links', [
            'user_id' => $user->id
        ]);
    }

    public function testUpdateUserInfo()
    {
        $data = [
            'name' => 'test_name',
            'company' => 'test_company',
            'telephone' => 'test_telephone',
            'address' => 'test_telephone'
        ];
        $user = User::find(rand(1, 10));
        $user->info->update($data);
        $this->assertDatabaseHas('user_infos', $data);
    }

    public function testUpdateUserScurity()
    {
        $data = [
            'email' => 'new_test_user@mail.com',
            'password' => 'new_asdfg001'
        ];
        $user = User::find(rand(1, 10));
        $user->update($data);
        $this->assertDatabaseHas('users', [
            'email' => $data['email']
        ]);
    }
}
