<?php


namespace App\Traits ;

use App\Models\User;
use App\Models\Diseases;
use App\Models\Examinations;
use App\Models\Rec_Doc;

trait ApiTraits {

    

    public function apiResponse($data = null, $message ='ok', $status= 200)
    {

        $arry = [
            'data' => $data,
            'status'=> $status,
            'message'=> $message,
        ];

        return response($arry, $status);

    }




    public function apiInsert($id=null, $table) {
        
        if($table::find($id))
        {
            $status='201';
            $message='created successfully';
            $data=$table::find($id);
    }
    elseif(!$table::find($id))
    {
        $status='400';
        $message='not found or bad request';
        $data=$table::find($id);
    
    }elseif($id===null){
        $data=null; 
        $status='401';
        $message='bad request';          
        
    
    }
    }

    public function apiGet($id=null,$table) {

        if($table::find($id))
        {
                $status='200';
                $message='ok';
                $data=$table::find($id);
        
            
        }elseif($id===null)
        {
            $data=$table::get();
            $status='303';
            $message='getting all data';
        }else
        {
            $data=null; 
            $status='404';
            $message='not found';            
        }
        $array=[
            
            'data' =>   $data,
            'status' =>$status , 
            'message'=>$message    ];
        return $array ;
    }
}




