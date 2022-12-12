<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class UserDosen extends Authenticatable
{
    use HasFactory;

    protected $guard = 'dosen';
    protected $connection = 'sqlsrv';
    protected $table = "T_DOSEN";
    protected $primaryKey = "KODEDOSEN";
    protected $keyType = "string";
    protected $guarded = [];
}
