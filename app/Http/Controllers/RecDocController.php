<?php

namespace App\Http\Controllers;
use App\Traits\ApiTraits;
use App\Models\Rec_Doc;
use Illuminate\Http\Request;

class RecDocController extends Controller
{
    public function rec_doc($id=null)
    {
        return $this->apiGet($id,'App\Models\Rec_Doc');
    }


}
