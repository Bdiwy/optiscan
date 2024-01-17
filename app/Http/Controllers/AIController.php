<?php
// AIController.php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Phpml\Classification\SVC;
use Phpml\SupportVectorMachine\Kernel;

class AIController extends Controller
{

    private $classifier;

    public function __construct()
    {
        // Load your pre-trained model during controller initialization
        $this->classifier = new SVC(Kernel::LINEAR);
        $this->classifier->load('public/Aimodel/efficientnetb3-EyeDisease-96.22.tflite');
        // You would load your trained model here. This is just a placeholder.
        // Example: $this->classifier->load('path/to/your/pretrained-model');
    }

    public function predict(Request $request)
    {
        // Get input data from the request
        $inputData = $request->input('data');

        // Make predictions using the loaded model
        $predictions = $this->classifier->predict([$inputData]);

        // Return the predictions as a JSON response
        return response()->json(['predictions' => $predictions]);
    }
}
