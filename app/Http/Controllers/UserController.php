<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Traits\ApiTraits;
use Illuminate\Http\Request;

class UserController extends Controller
{
    use ApiTraits;
    public function users($id=null)
    {
        return $this->apiGet($id,'App\Models\User');
    }




}
