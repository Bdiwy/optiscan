<?php

namespace App\Http\Controllers;
use App\Traits\ApiTraits;
use App\Models\Examinations;
use Illuminate\Http\Request;

class ExaminationsController extends Controller
{
    use ApiTraits;
    public function examinations($id=null)
    {
        return $this->apiGet($id,'App\Models\Examinations');
    }
}
