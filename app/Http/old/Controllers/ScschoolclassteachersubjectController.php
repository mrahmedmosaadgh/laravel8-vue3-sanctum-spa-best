<?php

namespace App\Http\Controllers;

use App\Models\scschoolclass;
use App\Models\scschoolclassteachersubject;
use App\Models\scschoolsubject;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ScschoolclassteachersubjectController extends Controller
{
    public function test(Request $request)
    {
        return response()->json(['message' => 'test done ok']);
    }

    public function loadmix(Request $request)
    {
        // return response()->json(['message' => ' loadmix: ']); 
        // return response()->json(['message' => $request->all() ]); 
        if (!Auth::check()) {return response()->json(['message' => 'error Auth' ]); }
        try {
        // $parmtxt="where('school_id',Auth::user()->school_id)->where('schoolgroup_id',Auth::user()->schoolgroup_id)";
            $scschoolclass  =scschoolclass::where('school_id',Auth::user()->school_id)->where('schoolgroup_id',Auth::user()->schoolgroup_id)->get();
            $scschoolsubject=scschoolsubject::where('school_id',Auth::user()->school_id)->where('schoolgroup_id',Auth::user()->schoolgroup_id)->get();
            $scschoolteacher=User::where('school_id',Auth::user()->school_id)->where('schoolgroup_id',Auth::user()->schoolgroup_id)->where('usertype','teacher')->get();
            $mix=scschoolclassteachersubject::where('school_id',Auth::user()->school_id)->where('schoolgroup_id',Auth::user()->schoolgroup_id)->get();
            // unserialize($record->field_name);
            // for($i=0; $i<= count($input['users']); $i++) {

                // you can save like this

                // Copy Code
                // $serializedArr = serialize($arr);
                // and call like this
                
                // Copy Code
                // $record = SomeModel::find(1);
                // unserialize($record->field_name);

                // }subject_ids
        // for($i=0; $i<= count($mix); $i++) {
        // $record = SomeModel::find(1);
        // unserialize($mix[$i]->subject_ids);
        // }
        // foreach ($mix as $item) {
        //     unserialize($item->subject_ids);
        // }
                        
                    // return response()->json(['message' =>  $mix ]); 

            return response()->json(['message' => [
                $scschoolclass  ,
                $scschoolsubject,
                $scschoolteacher,
                $mix,
            ] ]); 
        }catch (\Throwable $th) {return response()->json(['message' => 'error updateOrCreate: '.$th ]);}
        return response()->json(['message' => ' updateOrCreate: Done ' ]); 

}//loadmix

    public function loadmix2(Request $request)
    {
        //  return response()->json(['message' =>  'loadmix2' ]); 

        if (!Auth::check()) {return response()->json(['message' => 'error Auth' ]); }
        try {
        // $parmtxt="where('school_id',Auth::user()->school_id)->where('schoolgroup_id',Auth::user()->schoolgroup_id)";
        $school_id=Auth::user()->school_id;
        $schoolgroup_id=Auth::user()->schoolgroup_id;
        $scschoolclass  =scschoolclass::where('school_id',$school_id)
                                        ->where('schoolgroup_id',$schoolgroup_id)
                                        ->get();
        $scschoolsubject=scschoolsubject::where('school_id',$school_id)
                                        ->where('schoolgroup_id',$schoolgroup_id)
                                        ->get();
        $scschoolteacher=User::where('school_id',$school_id)
                                        ->where('schoolgroup_id',$schoolgroup_id)
                                        ->where('usertype','teacher')
                                        ->get();
        $scschoolstudents=User::where('school_id',$school_id)
                                        ->where('schoolgroup_id',$schoolgroup_id)
                                        ->where('usertype','student')
                                        ->get();

        $mix=scschoolclassteachersubject::where('school_id',$school_id)
                                        ->where('schoolgroup_id',$schoolgroup_id)
                                        ->get();

$data=[
               'classnames'  => $scschoolclass  ,
               'subjects'    => $scschoolsubject,
               'teachers'    => $scschoolteacher,
               'students'    => $scschoolstudents,
               'mix'        => $mix,
               'user'        => Auth::user(),
         ];
            return response()->json(['message' =>$data]);

            // return response()->json(['message' => [
            //     $scschoolclass  ,
            //     $scschoolsubject,
            //     $scschoolteacher,
            //     $mix,
            // ] ]); 
            
        }catch (\Throwable $th) {return response()->json(['message' => 'error updateOrCreate: '.$th ]);}
        return response()->json(['message' => ' updateOrCreate: Done ' ]); 

}//loadmix


    //`id`, `schoolgroup_id`, `school_id`, `class_id`, `subject_ids`, `teacher_ids`,
public function savesct(Request $request)
 {
    if (!Auth::check()) {return response()->json(['message' => 'error Auth' ]); }
    // return response()->json(['message' => $request->all()]);
    try {
        for ($i=0; $i <count($request->all()) ; $i++) { 

        $matchThese = [
        'school_id'=>Auth::user()->school_id,
        'schoolgroup_id'=>Auth::user()->schoolgroup_id,
        'class_id'=>$request->all()[$i]['class_id'],
        'subject_id'=>$request->all()[$i]['subject_id'],

            ];
            // subject_id`, `teacher_id`, `periodcount`
            
              $rand_color=    '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
        $datain = [
            'school_id'=>Auth::user()->school_id,
            'schoolgroup_id'=>Auth::user()->schoolgroup_id,
            'class_id'=>$request->all()[$i]['class_id'],
            'subject_id'=>$request->all()[$i]['subject_id'],
            'teacher_id'=>$request->all()[$i]['teacher_id'],
            'periodcount'=>$request->all()[$i]['periodcount'],
            'color'=>$rand_color,
        ];
        // 'subject_ids'=>serialize($request->all()[2][$i]) ,
        // 'subject_ids'=>json_encode( $request->all()[2][$i]),
        scschoolclassteachersubject::updateOrCreate($matchThese,$datain);
        // 'subject_ids'=>json_encode( $request->all()[2][$i]),
        };
        }catch (\Throwable $th) {return response()->json(['message' => 'error updateOrCreate: '.$th ]);
    }//try
    return response()->json(['message' => ' updateOrCreate scschoolclassteachersubject: Done savesct' ]); 






 }







    //`id`, `schoolgroup_id`, `school_id`, `class_id`, `subject_ids`, `teacher_ids`,
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
                'subject_ids'=>$subject_ids,
            ];
            // 'subject_ids'=>serialize($request->all()[2][$i]) ,
            // 'subject_ids'=>json_encode( $request->all()[2][$i]),
            scschoolclassteachersubject::updateOrCreate($matchThese,$datain);
            // 'subject_ids'=>json_encode( $request->all()[2][$i]),
            };
            }catch (\Throwable $th) {return response()->json(['message' => 'error updateOrCreate: '.$th ]);
        }//try
        return response()->json(['message' => ' updateOrCreate: Done ' ]); 

}//insert
public function insertold2(Request $request)
    {
        if (!Auth::check()) {return response()->json(['message' => 'error Auth' ]); }
        try {
            for ($i=0; $i <count($request->all()[0]) ; $i++) { 

        $matchThese = [
            'school_id'=>Auth::user()->school_id,
            'schoolgroup_id'=>Auth::user()->schoolgroup_id,
            'class_id'=>$request->all()[0][$i],

        ];

        // $list='';
        // $counter=0;
        //         foreach ($request->all()[2][$i] as $memu) {
        //             $counter++;
        //             if ($counter==count($request->all()[2][$i])) {
        //                 # code...
        //                 $list+= $memu;
        //             }else{
        //                 $list+= $memu.',';
        //             }
                    
        //      }



        // $myString = 'Hello Bob how are you?';
        // if (strpos($myString, 'Bob') !== false) {
        //     echo "My string contains Bob";
        // }



        $subject_ids=json_encode( $request->all()[2][$i]);
        // if ($request->all()[2][$i]==null) {
            // if (strpos($request->all()[2][$i], ',') !== false) {

            
        $subject_ids=str_replace("[", "", $subject_ids);
        $subject_ids=str_replace("]", "", $subject_ids);
        // }else{

        // }
        $datain = [
            'school_id'=>Auth::user()->school_id,
            'schoolgroup_id'=>Auth::user()->schoolgroup_id,
            'class_id'=>$request->all()[0][$i],
            'subject_ids'=>$subject_ids,
        ];
        // 'subject_ids'=>serialize($request->all()[2][$i]) ,
        // 'subject_ids'=>json_encode( $request->all()[2][$i]),
        scschoolclassteachersubject::updateOrCreate($matchThese,$datain);
        // 'subject_ids'=>json_encode( $request->all()[2][$i]),
        };
        }catch (\Throwable $th) {return response()->json(['message' => 'error updateOrCreate: '.$th ]);}
        return response()->json(['message' => ' updateOrCreate: Done ' ]); 

}//insertold
public function updateteachers(Request $request)
    {
        return response()->json(['message' => $request->all()]);
        if (!Auth::check()) {return response()->json(['message' => 'error Auth' ]); }


    }
public function updateteachers2(Request $request)
    {
        return response()->json(['message' => 'updateteachers done ok'.$request->all()]);
        return response()->json(['message' => ' updateteachers: '.$request->all() ]); 
        if (!Auth::check()) {return response()->json(['message' => 'error Auth' ]); }
        try {
            for ($i=0; $i <count($request->all()[0]) ; $i++) {

        $matchThese = [
            'school_id'=>Auth::user()->school_id,
            'schoolgroup_id'=>Auth::user()->schoolgroup_id,
            'class_id'=>$request->all()[0][$i],

        ];
        $list='';
        $counter=0;
        foreach ($request->all()[2][$i] as $memu) {
            $counter++;
            if ($counter==count($request->all()[2][$i])) {
                # code...
                $list+= $memu;
            }else{
                $list+= $memu.',';
            }
            
     }
        $datain = [
            'school_id'=>Auth::user()->school_id,
            'schoolgroup_id'=>Auth::user()->schoolgroup_id,
            'class_id'=>$request->all()[0][$i],
            'subject_ids'=>$list,
        ];
        // 'subject_ids'=>json_encode( $request->all()[2][$i]),
        scschoolclassteachersubject::updateOrCreate($matchThese,$datain);
        // 'subject_ids'=>json_encode( $request->all()[2][$i]),
        };
        }catch (\Throwable $th) {return response()->json(['message' => 'error updateOrCreate: '.$th ]);}
        return response()->json(['message' => ' updateOrCreate: Done ' ]); 

}//updateteachers






    public function insertold(Request $request)
    {
        if (!Auth::check()) {return response()->json(['message' => 'error Auth' ]); }
        // schoolgroup_id	school_id	teacher_id	class_id
        	// subject_id	notes1	
        // return response()->json(['message' => $request->all()[0]  ]);
        // return response()->json(['message' => $request->all()[1]  ]);
        // return response()->json(['message' => $request->all()[2]  ]);
        // return response()->json(['message' => $request->all()[2][2][0]  ]);

        // class_id
        // subject_id

        // schoolgroup_id	school_id

        // class_id

        // $matchThese = ['shopId'=>$theID,'metadataKey'=>2001];
        // ShopMeta::updateOrCreate($matchThese,['shopOwner'=>'New One']);
        try {
            for ($i=0; $i <count($request->all()[0]) ; $i++) { 
                // return response()->json(['message' => $request->all()[0][$i]  ]);
                for ($rr=0; $rr <count($request->all()[2][$i]) ; $rr++) { 
        $matchThese = [
            'school_id'=>Auth::user()->school_id,
            'schoolgroup_id'=>Auth::user()->schoolgroup_id,
            'class_id'=>$request->all()[0][$i],
            'subject_id'=>$request->all()[2][$i][$rr],
        ];
        $datain=[];

        // $datain = [
        //     'school_id'=>Auth::user()->school_id,
        //     'schoolgroup_id'=>Auth::user()->schoolgroup_id,
        //     'class_id'=>$request->all()[0][$i],
        //     'subject_id'=>$request->all()[2][$i][$rr],
        // ];
        // return response()->json(['message' => $datain ]);
        scschoolclassteachersubject::updateOrCreate($matchThese,$matchThese);

        };

        
        }
            //code...
        } catch (\Throwable $th) {
            return response()->json(['message' => 'error updateOrCreate: '.$th ]);
        
        }

        return response()->json(['message' => ' updateOrCreate: Done ' ]);


            }
}
