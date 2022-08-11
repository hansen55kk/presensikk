<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Absen;
use App\Models\Manual;
use App\Models\Pegawai;

class ManualController extends Controller
{
    public function index()
    {
        $lists = Pegawai::get();
        return view('pages.manual', compact('lists'));
    }

    public function submit(Request $request)
    {
        $id = $request->id;
        $nama = Pegawai::find($id)->name;
        $check = Absen::where('pegawai_id', $id)->where('created_at', '>=', date('Y-m-d', time()) . ' 00:00:00')->where('created_at', '<=', date('Y-m-d', time()) . ' 23:59:59')->count();
        if ($check == 0) {
            $insert = [
                'id' => $id,
            ];
            $absen = new Absen();
            $absen->addAbsen($insert);
            if ($absen)
                return back()->withErrors(['msg' => 'Success, welcome ' . $nama]);
            else
                return back()->withErrors(['msg' => 'Failed to insert data']);
        } else {
            return back()->withErrors(['msg' => 'Data already present']);
        }
    }
}
