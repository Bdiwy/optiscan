<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class img extends Model
{
    use HasFactory;

    protected $table='img';
    protected $fillable = [
        'photo',
        'type',
        'user_id'
        ];

    
    protected $hidden = [
        'created_at',
        'updated_at',
    ];

}
