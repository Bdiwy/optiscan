<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\ApiTraits;

class imgController extends Controller
{
    use ApiTraits;

    public function upload_photo(Request $request)
    {
        $fileName='ahmed_img.jpg';
        $request->file('photo')->move(public_path("imgs/eye_photo"),$fileName);
        $photoUrl=url('/imgs/eye_photo'.$fileName);
        return response()->json(['url'=>$photoUrl],200);
    }

    
    public function download_photo()
    {
        return response()->download(public_path("imgs").'\eye_photo\ahmed_img.jpg');
    }
    public function patient(Request $request)
{
            $query = $request->input('eye', 'default value');
            if($query='examin')
            {
                $fileName='examin_img.jpg';
                $request->file('photo')->move(public_path("imgs/examin_photo"),$fileName);
                $photoUrl=url('/imgs/examin_photo'.$fileName);
                return response()->json([
                    'url'=>$photoUrl,
                    'message'=>'examin uploaded successfully',
                    'status'=>'200'
            ],200);
            }elseif ($query='eye') {
                $fileName='ahmed_img.jpg';
                $request->file('photo')->move(public_path("imgs/eye_photo"),$fileName);
                $photoUrl=url('/imgs/eye_photo'.$fileName);
                return response()->json([
                    'url'=>$photoUrl,
                    'message'=>'examin uploaded successfully',
                    'status'=>'200'
                ],200);
            }else
            {
                return $this->apiResponse('null','Bad request , Error in parametar upload !!','400');
            }
}

}
