<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusName extends Model
{
    use HasFactory;

    protected $table = 'BusName';
    protected $fillable = [
    'bus_name',
    'operation'
];
}
