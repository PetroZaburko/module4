<?php

namespace App\Http\Controllers;

use App\User;
use App\UserStatuses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UsersController extends Controller
{
    public function all()
    {
        $users = User::paginate(config('view.per_page'));
        return view('users.all', compact('users'));
    }

    public function profile($id)
    {
        $user = User::find($id);
        return view('users.profile', compact('user'));
    }

    public function create()
    {
        $statuses = UserStatuses::all();
        return view('users.create', compact('statuses'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed'
        ]);
        $user = User::add($request->all());
        $user->addAvatar($request->file('avatar'));
        return redirect()->route('users.all')->with([
            'message' => 'New user - ' . $user->info->name . ' was successful created',
            'status' => '1'
        ]);
    }

    public function editInfo($id)
    {
        $user = User::find($id);
        return view('users.edit', compact('user'));
    }

    public function updateInfo(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255'
        ]);
        $user = User::find($id);
        $user->updateInfo($request->all());
        return redirect()->route('users.all')->with([
            'message' => $user->info->name . ' info-data were successful updated',
            'status' => '1'
        ]);
    }

    public function editSecurity($id)
    {
        $user = User::find($id);
        return view('users.security', compact('user'));
    }

    public function updateSecurity(Request $request, $id)
    {
        $this->validate($request, [
            'email' => [
                'required',
                'email',
                Rule::unique('users')->ignore($id)
            ],
            'password' => 'string|min:6|confirmed|nullable'
        ]);
        $user = User::find($id);
        $user->updateSecurity($request->all());
        return redirect()->route('users.all')->with([
            'message' => $user->info->name . ' security-data were successful updated',
            'status' => '1'
        ]);
    }

    public function editStatus($id)
    {
        $user = User::find($id);
        $statuses = UserStatuses::all();
        return view('users.status', compact('user', 'statuses'));
    }

    public function updateStatus(Request $request, $id)
    {
        $user = User::find($id);
        $user->update($request->all());
        return redirect()->route('users.all')->with([
            'message' => $user->info->name . ' status was successful updated',
            'status' => '1'
        ]);
    }

    public function editAvatar($id)
    {
        $user = User::find($id);
        return view('users.avatar', compact('user'));
    }

    public function updateAvatar(Request $request, $id)
    {
        $this->validate($request, [
            'image' => 'required|mimes:jpeg,jpg,png'
        ]);
        $user = User::find($id);
        $user->updateAvatar($request->file('image'));
        return redirect()->route('users.all')->with([
            'message' => $user->info->name . ' avatar was successful updated',
            'status' => '1'
        ]);
    }

    public function delete($id)
    {
        $user = User::find($id);
        $name = $user->info->name;
        $user->remove();
        $message = "User $name , and all his data were successful deleted";
        if (Auth::id() == $id) {
            Auth::logout();
        }
        return redirect()->route('users.all')->with([
            'message' => $message,
            'status' => '0'
        ]);
    }
}
