<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OperatorUser extends Model
{
    use HasFactory;

    protected $connection = 'sqlsrv';
    protected $table = 'T_USER';
    protected $primaryKey = 'UNAME';
    protected $keyType = 'string';
}
