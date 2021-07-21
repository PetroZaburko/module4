<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class AuthTest extends TestCase
{
    use DatabaseTransactions;

    public function testLoginForm()
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
        $response->assertViewIs('auth.login');
    }

    public function testRegisterForm()
    {
        $response = $this->get('/register');
        $response->assertStatus(200);
        $response->assertViewIs('auth.register');
    }

    public function testLoginUser()
    {
        $password = 'asdfg001';
        $user = factory(User::class)->create([
            'password' => bcrypt($password)
        ]);
        $response = $this->post('login', [
            'email' => $user->email,
            'password' => $password,
            '_token' => csrf_token()
        ]);
        $response->assertStatus(302);
        $this->assertAuthenticatedAs($user);
    }

    public function testRegistersUser()
    {
        $user = factory(User::class)->make();
        $response = $this->post('/register', [
            'name' => 'test_user',
            'email' => $user->email,
            'password' => $user->password,
            'password_confirmation' => $user->password
        ]);
        $response->assertStatus(302);
        $this->assertAuthenticated();
        $this->assertDatabaseHas('users', [
            'email' => $user->email
        ]);
        $this->assertDatabaseHas('user_infos', [
            'name' => 'test_user'
        ]);
    }

    public function testLoginUserWithWrongCredentials()
    {
        $user = factory(User::class)->create();
        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'invalid_password',
            '_token' => csrf_token()
        ]);
        $response->assertSessionHasErrors();
        $this->assertGuest();
    }

    public function testRegisteUserWithWrongCredentials()
    {
        $user = factory(User::class)->make();
        $response = $this->post('/register', [
            'name' => 'test_user',
            'email' => $user->email,
            'password' => $user->password,
            'password_confirmation' => 'wrong_password'
            ]);
        $response->assertSessionHasErrors();
        $this->assertGuest();
        $this->assertDatabaseMissing('users', [
            'email' => $user->email
        ]);
        $this->assertDatabaseMissing('user_infos', [
            'name' => 'test_user'
        ]);
    }

    public function testLogoutUser()
    {
        $user = factory(User::class)->create();
        $response = $this->actingAs($user)->post('/logout');
        $response->assertStatus(302);
        $response->assertRedirect('/');
        $this->assertGuest();
    }
}
