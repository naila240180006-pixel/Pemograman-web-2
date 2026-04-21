<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sandal extends Model
{
    protected $fillable = [
    'nama',
    'merk',
    'stok',
    'harga'
];
}
