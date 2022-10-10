<?php

namespace App\Http\Controllers;

use App\Models\scschooltermmark;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class ScschooltermmarkController extends Controller
{
    //
    // scschooltermmarks
    public function insert(Request $request)
    {
        
        if (!Auth::check()) {return response()->json(['message' => 'error Auth' ]); }
        try {
            for ($i=0; $i <count($request->all()[0]) ; $i++) { 

            $matchThese = [
            'school_id'=>Auth::user()->school_id,
            'schoolgroup_id'=>Auth::user()->schoolgroup_id,
            'class_id'=>$request->all()[0][$i],

                ];



            // $subject_ids=json_encode( $request->all()[2][$i]);
            // $subject_ids=str_replace("[", "", $subject_ids);
            // $subject_ids=str_replace("]", "", $subject_ids);
            // }else{

            // }
            $datain = [
                'school_id'=>Auth::user()->school_id,
                'schoolgroup_id'=>Auth::user()->schoolgroup_id,
                'class_id'=>$request->all()[0][$i],
                // 'subject_id'=>$subject_ids,
            ];
            // 'subject_ids'=>serialize($request->all()[2][$i]) ,
            // 'subject_ids'=>json_encode( $request->all()[2][$i]),
        //             $userData = array('username' => 'Me', 'email' => 'me@yahoo.com');
        // User::create($userData);
            scschooltermmark::create($datain);
            // scschooltermmarkmain::updateOrCreate($matchThese,$datain);
            // 'subject_ids'=>json_encode( $request->all()[2][$i]),
            };
            }catch (\Throwable $th) {return response()->json(['message' => 'error updateOrCreate: '.$th ]);
        }//try
        return response()->json(['message' => ' updateOrCreate: Done ' ]); 

}//insert

}
