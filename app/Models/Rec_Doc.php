<?php

namespace App\Models;

use App\Models\Diseases;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rec_Doc extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'location',
        'disease_understand',
        'rating',
        'academic_position',
    ];

    
    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    
    public function disease()
    {
        return $this->belongsToMany(Diseases::class,'rec_doc_disease_pivot');
    }
}
