<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shortcut extends Model
{
    protected $fillable = [
        'shortcut',
        'command',
        'program',
    ];
}
