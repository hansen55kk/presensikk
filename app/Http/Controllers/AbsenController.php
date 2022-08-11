<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Absen;
use App\Models\Pegawai;


class AbsenController extends Controller
{
    public function index()
    {
        return view('pages.absen');
    }

    public function submit(Request $request)
    {
        $uuid = $request->uuid;
        $id = Pegawai::where('uuid', $uuid)->first();
        $count = Pegawai::where('uuid', $uuid)->count();
        $check = Absen::where('pegawai_id', $id->id)->where('created_at', '>=', date('Y-m-d', time()) . ' 00:00:00')->where('created_at', '<=', date('Y-m-d', time()) . ' 23:59:59')->count();
        if ($count > 0 && $check == 0) {
            $insert = [
                'id' => $id->id,
            ];
            $absen = new Absen();
            $absen->addAbsen($insert);
            if ($absen)
                return back()->withErrors(['msg' => 'Success, welcome ' . $id->name]);
            else
                return back()->withErrors(['msg' => 'Failed to insert data']);
        } elseif ($check > 0) {
            return back()->withErrors(['msg' => 'Data already present']);
        } else {
            return back()->withErrors(['msg' => 'Data not found']);
        }
    }
}
