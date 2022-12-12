<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class UserMahasiswa extends Authenticatable
{
    use HasFactory;

    protected $guard = 'mahasiswa';
    protected $connection = 'sqlsrv';
    protected $table = "T_MAHASISWA";
    protected $primaryKey = "NIM";
    protected $keyType = "string";
    protected $guarded = [];
}
