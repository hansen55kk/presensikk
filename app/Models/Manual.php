<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manual extends Model
{
    protected $table = 'data_absensi';
    use HasFactory;

    public function addManual($data)
    {
        try {
            $this->pegawai_id = $data['id'];
            $this->save();
            return true;
        } catch (Throwable $th) {
            return false;
        }
    }
}
