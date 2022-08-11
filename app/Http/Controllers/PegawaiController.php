<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use App\Http\Requests\StorePegawaiRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    public function index()
    {
        if (Auth::user() == null)
            return redirect('login');
        $tables = Pegawai::get();
        return view('pages.pegawai', compact('tables'));
    }
    public function insert(Request $request)
    {
        if (Auth::user() == null)
            return redirect('login');
        $validation = $request->validate([
            'name' => ['required'],
            'uuid' => ['required'],
        ]);
        $name = $request->name;
        $uuid = $request->uuid;
        $email = $request->email;
        $address = $request->address;
        $status = $request->status;
        $phone = $request->phone;
        $insert = [
            'name' => $name,
            'uuid' => $uuid,
            'email' => $email,
            'address' => $address,
            'status' => $status,
            'phone' => $phone,
        ];
        try {
            $pegawai = new Pegawai();
            $pegawai->addPegawai($insert);
            return back()->with('message', 'Success insert data');
        } catch (\Throwable $th) {
            return back()->withErrors('Failed to insert data. Error: ' . $th);
        }
    }
    public function update(Request $request, $id)
    {
        try {
            if (Auth::user() == null)
                return redirect('login');
            $validation = $request->validate([
                'name' => ['required'],
                'uuid' => ['required'],
            ]);
            $name = $request->name;
            $uuid = $request->uuid;
            $email = $request->email;
            $address = $request->address;
            $status = $request->status;
            $phone = $request->phone;
            $update = [
                'name' => $name,
                'uuid' => $uuid,
                'email' => $email,
                'address' => $address,
                'status' => $status,
                'phone' => $phone,
            ];
            Pegawai::where('id', $id)->update($update);
            return back()->with('message', 'Success update data');
        } catch (\Throwable $th) {
            return back()->withErrors('Failed to update data');
        }
    }
    public function destroy($id)
    {
        if (Auth::user() == null)
            return redirect('login');
        try {
            Pegawai::find($id)->delete();
            return back()->with('message', 'Success delete data');
        } catch (\Throwable $th) {
            return back()->withErrors('Failed to delete data');
        }
    }
}
