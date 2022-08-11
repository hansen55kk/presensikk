<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ProfileController extends Controller
{
    public function index()
    {
        if (Auth::user() == null)
            return redirect('login');
        return view('pages.profile');
    }
    public function credentials(Request $request, $id)
    {
        if (Auth::user() == null)
            return redirect('login');
        $validation = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        $data = User::find($id)->first();
        $checkPassword = Hash::check($password, $data->password);
        if (!$checkPassword)
            return back()->withErrors(['msg' => 'Wrong Password']);
        else {
            $update = [
                'name' => $name,
                'email' => $email,
            ];
            try {
                User::where('id', $id)->update($update);
                return back()->with('message', 'Success update data');
            } catch (\Throwable $th) {
                return back()->withErrors(['msg' => 'Error: ' . $th]);
            }
        }
    }
    public function password(Request $request, $id)
    {
        if (Auth::user() == null)
            return redirect('login');
        $validation = $request->validate([
            'oldPassword' => ['required'],
            'newPassword' => ['required'],
        ]);
        $oldPassword = $request->oldPassword;
        $newPassword = $request->newPassword;
        $data = User::find($id)->first();
        $checkPassword = Hash::check($oldPassword, $data->password);
        if (!$checkPassword)
            return back()->withErrors(['msg' => 'Wrong Password']);
        else {
            $newPassword = Hash::make($newPassword);
            $update = [
                'password' => $newPassword,
            ];
            try {
                User::where('id', $id)->update($update);
                return back()->with('message', 'Success change password');
            } catch (\Throwable $th) {
                return back()->withErrors(['msg' => 'Error: ' . $th]);
            }
        }
    }
}
