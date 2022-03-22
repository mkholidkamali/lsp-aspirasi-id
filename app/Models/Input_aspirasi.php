<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Input_aspirasi extends Model
{
    use HasFactory;
    
    protected $guarded = [
        'id',
        'id_pelaporan'
    ];
}
