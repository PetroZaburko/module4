<?php


namespace Tests\Feature;


use App\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class AccessTest extends TestCase
{
    use DatabaseTransactions;

    public function testAuthentificatedUserCanNotViewRegistration()
    {
        $user = factory(User::class)->create();
        $response = $this->actingAs($user)->get('register');
        $response->assertStatus(302);
        $response->assertRedirect('/users');
    }

    public function testAuthentificatedUserCanNotViewLogin()
    {
        $user = factory(User::class)->create();
        $response = $this->actingAs($user)->get('login');
        $response->assertStatus(302);
        $response->assertRedirect('/users');
    }

    public function testNotAdminUserCanNotAccessCreatePage()
    {
        $user = factory(User::class)->create([
            'is_admin' => '0'
        ]);
        $response = $this->actingAs($user)->get('user/create');
        $response->assertStatus(302);
        $response->assertRedirect('users');
        $response->assertSessionHas('message', 'You don\'t have enough permissions');
    }

    public function testNotAdminUserCanNotAccessEditPage()
    {
        $user = factory(User::class)->create([
            'is_admin' => '0'
        ]);
        $response = $this->actingAs($user)->get('/user/edit/' . ($user->id - 1));
        $response->assertStatus(302);
        $response->assertRedirect('users');
        $response->assertSessionHas('message', 'You don\'t have enough permissions');
    }

    public function testNotAdminUserCanNotAccessSecurityPage()
    {
        $user = factory(User::class)->create([
            'is_admin' => '0'
        ]);
        $response = $this->actingAs($user)->get('/user/security/' . ($user->id - 1));
        $response->assertStatus(302);
        $response->assertRedirect('users');
        $response->assertSessionHas('message', 'You don\'t have enough permissions');
    }

    public function testNotAdminUserCanNotAccessStatusPage()
    {
        $user = factory(User::class)->create([
            'is_admin' => '0'
        ]);
        $response = $this->actingAs($user)->get('/user/status/' . ($user->id - 1));
        $response->assertStatus(302);
        $response->assertRedirect('users');
        $response->assertSessionHas('message', 'You don\'t have enough permissions');
    }

    public function testNotAdminUserCanNotAccessAvatarPage()
    {
        $user = factory(User::class)->create([
            'is_admin' => '0'
        ]);
        $response = $this->actingAs($user)->get('/user/avatar/' . ($user->id - 1));
        $response->assertStatus(302);
        $response->assertRedirect('users');
        $response->assertSessionHas('message', 'You don\'t have enough permissions');
    }
}
