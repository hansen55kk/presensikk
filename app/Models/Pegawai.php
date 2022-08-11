<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = 'data_pegawai';
    use HasFactory;
    public function absen()
    {
        return $this->hasMany('App\Models\Absen');
    }
    public function addPegawai($data)
    {
        try {
            $this->uuid = $data['uuid'];
            $this->name = $data['name'];
            $this->email = $data['email'];
            $this->status = $data['status'];
            $this->address = $data['address'];
            $this->phone = $data['phone'];
            $this->save();
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }
}
