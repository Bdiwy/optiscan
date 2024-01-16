<?php

namespace App\Http\Controllers;

use App\Models\img;
use App\Models\User;
use App\Traits\ApiTraits;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class imgController extends Controller
{
    use ApiTraits;

    // public function upload_photo(Request $request)
    // {
    //     $fileName='ahmed_img.jpg';
    //     $request->file('photo')->move(public_path("imgs/eye_photo"),$fileName);
    //     $photoUrl=url('/imgs/eye_photo'.$fileName);
    //     return response()->json(['url'=>$photoUrl],200);
    // }

    





    public function download_photo(Request $request,$userid=null)
    {
        $tybe = $request->input('tybe', 'default value');
        $user = User::find($userid);
        $img = $user->img->first();
        $photoname= $img ? $img->photo : null;
        $path= public_path("imgs\\".$tybe."_photo\\").$photoname;
        
        if (file_exists($path)) {
            return response()->download($path);
        } else {
            return response()->json(['error' => 'File does not exist.']);
        }
    
    
    }
    

    public function patient(Request $request)
{
            $query = $request->input('eye', 'default value');
            if($query=='examin')
            {
                $fileName=Auth::user()->name.'_examin_img.jpg';
                $request->file('photo')->move(public_path("imgs/examin_photo"),$fileName);
                $photoUrl=url('/imgs/examin_photo/'.$fileName);


                img::create([
                    'photo'=>$fileName,
                    'type'=>'examin',
                    'user_id'=>Auth::user()->id,
                ]);



                return response()->json([
                    'url'=>$photoUrl,
                    'message'=>'examin uploaded successfully',
                    'status'=>'200'
            ],200);
            }elseif ($request->input('eye')=='eye') {
                $fileName=Auth::user()->name.'_eye_img.jpg';
                $request->file('photo')->move(public_path("imgs/eye_photo"),$fileName);
                $photoUrl=url('/imgs/eye_photo/'.$fileName);
                img::create([
                    'photo'=>$fileName,
                    'type'=>'eye',
                    'user_id'=>Auth::user()->id,
                ]);
                return response()->json([
                    'url'=>$photoUrl,
                    'message'=>'eye uploaded successfully',
                    'status'=>'200'
                ],200);
            }else
            {
                return $this->apiResponse('null','Bad request , Error in parametar upload !!','400');
            }
}

}
