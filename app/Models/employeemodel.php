<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employeemodel extends Model
{
    use HasFactory;

    protected $table = 'employeetable';
    protected $primarykey= 'id';
    protected $fillable = [
        'firstname',
        'lastname',
        'middlename',
        'address'
    ];
}
