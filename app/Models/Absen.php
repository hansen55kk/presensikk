<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Absen extends Model
{
    protected $table = 'data_absensi';
    use HasFactory;

    public function addAbsen($data)
    {
        try {
            $this->pegawai_id = $data['id'];
            $this->save();
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }
    public function pegawai()
    {
        return $this->belongsTo('App\Models\Pegawai');
    }
}
