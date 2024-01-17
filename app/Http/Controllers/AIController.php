<?php
// AIController.php

namespace App\Http\Controllers;
use App\Models\user_disease_pivot;
use Illuminate\Http\Request;
use TensorFlow\TensorFlow;

class AIController extends Controller
{

    public function predict(Request $request)
    {
        
        user_disease_pivot::create([
        
        'user_id'=>'1',
            'diseases'=>  $request->result
        ]);
    }
}
