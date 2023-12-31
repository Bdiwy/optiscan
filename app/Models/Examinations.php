<?php

namespace App\Models;

use App\Models\User;
use App\Models\Diseases;
use PhpParser\Comment\Doc;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Examinations extends Model
{
    use HasFactory;


    protected $fillable = [
        'tybe',
        'status_of_user'
    
    ];

        protected $hidden = [
    
        'created_at',
        'updated_at',
    ];



    public function users()
    {
        return $this->belongsToMany(User::class,'user_examination_pivot');
    }


    public function diseases()
    {
        return $this->belongsToMany(Diseases::class,'disease_examination_pivot');
    }


}
