<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UsersController extends Controller
{
    public function users()
    {
        $users = User::query()->paginate(10);

        return view('admin.users')->with('users', $users);
    }

    public function setAdmin(Request $request, User $user)
    {
        $user ->is_admin=true;
        $data = $request->except('_token');
        $user->fill($data)->save();
        return redirect()->route('admin.users')->with('success', 'Юзверь успешно назначен администратором');
    }

    public function unsetAdmin(Request $request, User $user)
    {
        $user ->is_admin=false;
        $data = $request->except('_token');
        $user->fill($data)->save();
        return redirect()->route('admin.users')->with('success', 'Юзверь успешно лишен прав администратора');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.users')->with('success', 'Юзверь удалён успешно!');
    }
}
