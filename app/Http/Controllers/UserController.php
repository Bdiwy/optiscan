<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Traits\ApiTraits;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    use ApiTraits;
    public function users($id=null)
    {
        return $this->apiGet($id,'App\Models\User');
    }




}
