<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Petugas extends Authenticatable
{
    protected $table = 'petugas';
    protected $primaryKey = 'id_petugas';
    protected $fillable = ['id_petugas', 'nama_petugas', 'username', 'password', 'telp', 'level', 'created_at', 'updated_at'];

    public function username()
    {
        return 'username';
    }
}
