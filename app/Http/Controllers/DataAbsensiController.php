<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Pegawai;
use App\Models\Absen;

class DataAbsensiController extends Controller
{
    public function __invoke()
    {
        if (Auth::user() == null)
            return redirect('login');
        if (isset($_GET['fromDate']) && isset($_GET['toDate'])) {
            $reset = True;
            $tables = Absen::where('created_at', '>=', date('Y-m-d H:i:s', strtotime($_GET['fromDate'] . '00:00:00')))->where('created_at', '<=', date('Y-m-d H:i:s', strtotime($_GET['toDate'] . '23:59:59')))->orderBy('created_at', 'DESC')->get();
        } else {
            $reset = False;
            $tables = Absen::orderBy('created_at', 'DESC')->get();
        }

        // dd($tables);
        return view('pages.data-absensi', compact('tables', 'reset'));
    }
}
