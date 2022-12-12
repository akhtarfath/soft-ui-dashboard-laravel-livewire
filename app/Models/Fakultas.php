<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fakultas extends Model
{
    use HasFactory;

    protected $connection = 'sqlsrv';
    protected $table = 'T_FAK';
    protected $primaryKey = 'KODEFAK';
    protected $keyType = 'string';
}
