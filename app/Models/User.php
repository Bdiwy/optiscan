<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Diseases;
use App\Models\Examinations;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    
    protected $hidden = [
        'password',
        'remember_token',
        'email_verified_at',
        'created_at',
        'updated_at',
    ];

    
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



    public function disease()
    {
        return $this->belongsToMany(Diseases::class,'user_disease_pivot');
    }
    public function examination()
    {
        return $this->belongsToMany(Examinations::class,'user_examination_pivot');
    }
}
