<?php

namespace App\Http\Controllers;

use App\Models\scschoolclass;
use App\Models\scschoolclassteachersubject;
use App\Models\scschoolschedule;
use App\Models\User;
// use CreateScschoolclassesTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ScschoolteachertasksController extends Controller
{
    //
        public function get_class_students(Request $request){

$students=User::with('myclass')->where('school_id',Auth::user()->school_id)
->where('usertype','student')
->where('class_id',$request->class_id )->get();

return response()->json([
    'message' => "Done success",
    'data' => $students,
 ]);


        }





    public function teacher_get_classes_students(Request $request){
        if (!Auth::check()) {return response()->json(['message' => 'error Auth' ]); }
        // return response()->json(['message' => 'teacher_get_classes_students' ]);
        // scschoolclasses



        try {
            //code...

        $scschoolclasses=scschoolclass::all()->
        where('school_id',Auth::user()->school_id)->
        where('schoolgroup_id',Auth::user()->schoolgroup_id);

$scschoolclassteachersubjects=scschoolclassteachersubject::with('myclasses','mysubjects','myteachers','mystudents')->
            where('teacher_id',Auth::user()->id)
            ->where('school_id',Auth::user()->school_id)->get();


            $scschoolschedule=scschoolschedule::with('mycts','mycts.myclasses','mycts.mysubjects','mycts.myteachers','mycts.mystudents')
            // $scschoolschedule=scschoolschedule::with('cts','mysubjects','myteachers','mystudents')->
            // where('teacher_id',Auth::user()->id)
            ->where('school_id',Auth::user()->school_id)->get();

// ->where('schoolgroup_id',Auth::user()->schoolgroup_id)->dd()->with('myclasses')


        // $students=User::all()->
        // where('school_id',Auth::user()->school_id)->
        // where('schoolgroup_id',Auth::user()->schoolgroup_id)->
        // where('usertype','student')->
        // where('classname','5A');
        // return response()->json(['message' => Auth::user() ]);
        // return response()->json(['message' => Auth::user()->id ]);
        // $data=[
        //     $scschoolclassteachersubjects,$scschoolclasses,$scschoolschedule
        // ];

        $data=[
            'sct'=>$scschoolclassteachersubjects,
            'classes'=>$scschoolclasses,
            'schedule'=>$scschoolschedule
        ];



        
        return response()->json(['message' => $data,
        'data' => $data
     ]);



    } catch (\Throwable $th) {
        return response()->json(['message' => $th ]);
      
        
    }








    }//teacher_get_classes_students---------------------------------------------------------------------------











    
}
