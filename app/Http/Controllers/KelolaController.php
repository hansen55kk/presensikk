<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class KelolaController extends Controller
{
    public function index()
    {
        if (Auth::user() == null)
            return redirect('login');
        elseif (Auth::user()->level != 'Super Administrator')
            abort(403);
        $tables = User::where('level', 'Administrator')->get();
        return view('pages.kelola', compact('tables'));
    }
}
