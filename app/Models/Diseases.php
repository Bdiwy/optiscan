<?php

namespace App\Models;

use App\Models\User;
use App\Models\Examinations;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Diseases extends Model
{
    use  HasFactory;

    protected $fillable = [
        'name',
    
    ];

        protected $hidden = [
    
        'created_at',
        'updated_at',
    ];





    public function user()
    {
        return $this->belongsToMany(User::class,'user_disease_pivot');
    }

    public function examination()
    {
        return $this->belongsToMany(Examinations::class,'disease_examination_pivot');
    }
    public function rec_doc()
    {
        return $this->belongsToMany(Rec_Doc::class,'rec_doc_disease_pivot');
    }

}
