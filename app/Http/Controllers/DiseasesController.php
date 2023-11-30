<?php

namespace App\Http\Controllers;

use App\Models\Diseases;
use Illuminate\Http\Request;
use App\Traits\ApiTraits;


class DiseasesController extends Controller
{
    use ApiTraits;
    public function diseases($id=null)
    {
        return $this->apiGet($id,'App\Models\Diseases');
    }





}
