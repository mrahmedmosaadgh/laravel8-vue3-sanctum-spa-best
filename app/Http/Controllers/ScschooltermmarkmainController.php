<?php

namespace App\Http\Controllers;

use App\Models\scschooltermmarkmain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ScschooltermmarkmainController extends Controller
{

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



            $subject_ids=json_encode( $request->all()[2][$i]);
            $subject_ids=str_replace("[", "", $subject_ids);
            $subject_ids=str_replace("]", "", $subject_ids);
            // }else{

            // }
            $datain = [
                'school_id'=>Auth::user()->school_id,
                'schoolgroup_id'=>Auth::user()->schoolgroup_id,
                'class_id'=>$request->all()[0][$i],
                'subject_id'=>$subject_ids,
            ];
            // 'subject_ids'=>serialize($request->all()[2][$i]) ,
            // 'subject_ids'=>json_encode( $request->all()[2][$i]),
        //             $userData = array('username' => 'Me', 'email' => 'me@yahoo.com');
        // User::create($userData);
            scschooltermmarkmain::create($datain);
            // scschooltermmarkmain::updateOrCreate($matchThese,$datain);
            // 'subject_ids'=>json_encode( $request->all()[2][$i]),
            };
            }catch (\Throwable $th) {return response()->json(['message' => 'error updateOrCreate: '.$th ]);
        }//try
        return response()->json(['message' => ' updateOrCreate: Done ' ]); 

}//insert



    //
    public function update(Request $request){
        // return response()->json(['message' => $request[0]['markname']]);
        if (!Auth::check()) {return response()->json(['message' => 'error Auth' ]); }

        try {
            for ($i=0; $i <count($request->all()) ; $i++) { 
    
            $matchThese = [
            'id'=>$request[$i]['id'],

    
                ];
            //                 'schoolgroup_id'=>Auth::user()->schoolgroup_id,
            // 'class_id'=>$request->all()[$i]['class_id'],
            // 'subject_id'=>$request->all()[$i]['subject_id'],
                // subject_id`, `teacher_id`, `periodcount`
                
                //   $rand_color=    '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
            $datain = [
                'school_id'=>Auth::user()->school_id,
                'schoolgroup_id'=>Auth::user()->schoolgroup_id,
                'class_id'=>$request[$i]['class_id'],
                'subject_id'=>$request[$i]['subject_id'],
                'teacher_id'=>$request[$i]['teacher_id'],
                'markname'=>$request[$i]['markname'],
                'markfull'=>$request[$i]['markfull'],
            ];
            // { "id": 1, "schoolgroup_id": 1, "school_id": 1, "scschoolclassteachersubject_id": 1,
                //  "teacher_id": 1, "class_id": 1, "subject_id": 1, "term": "1", "stage": "prim",
                //  "markname": "ar,en,sc,sse,ssa,ddd,ddd,ddd,ddd,ddd,ddd,ddd,ddd", "markfull": "100,100,100,100,100", "markmin": null, "publishdate": "2022-07-19 14:59:14", "cutoffdate": "2022-07-21 14:59:14",
            //      "notes1": null, "notes2": null, "notes3": null, "created_at": null, "updated_at": null }
            // 'subject_ids'=>serialize($request->all()[2][$i]) ,
            // 'subject_ids'=>json_encode( $request->all()[2][$i]),
            scschooltermmarkmain::updateOrCreate($matchThese,$datain);
            // 'subject_ids'=>json_encode( $request->all()[2][$i]),
            };
            }catch (\Throwable $th) {return response()->json(['message' => 'error updateOrCreate: '.$th ]);
        }//try



    }


    public function all(Request $request){

        
        //  $scschoolteacher=scschoolteacher::all();
        // return response()->json($scschoolteacher);
        // schoolgroup_id: 1, school_id: 1
        // return response()->json(['message' => 'marks all' ]);
        if (!Auth::check()) {return response()->json(['message' => 'error Auth' ]); }
        // 'schoolgroup_id'=> Auth::user()->schoolgroup_id,
        // 'school_id'     => Auth::user()->school_id,
            try {
                $scschoolteacher=scschooltermmarkmain::where('school_id',Auth::user()->school_id)->where('schoolgroup_id', Auth::user()->schoolgroup_id)
                         ->get();
                //where('usertype','teacher') $scschoolteacher=scschoolteacher::where('school_id',$school_id)->where('schoolgroup_id',$schoolgroup_id)->orderBy('className')->get();;
                return response()->json(['message' => $scschoolteacher  ]);
            } catch (\Throwable $th) {
                return response()->json(['message' => 'error scschoolteacher' ]);
                //throw $th;
            }
    
            // $menu=scschoolteacher::all()->sortBy("itemorder");
            // $menu=scschoolteacher::orderBy('itemorder')->get(['id','catalog','item','itemorder','notes1']); 
    
            // $results = Project::orderBy('name')->get();
            // $results = Project::orderBy('name')->get();
    }//all---------------------------------------------------------------------------
    
}
