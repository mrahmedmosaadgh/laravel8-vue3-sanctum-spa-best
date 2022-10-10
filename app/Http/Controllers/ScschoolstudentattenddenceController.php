<?php

namespace App\Http\Controllers;

use App\Models\Scschoolstudentattenddence;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\DB;

class ScschoolstudentattenddenceController extends Controller
{
    //

// public function saveattendanceold(Request $request){


    public function saveattendance(Request $request){


$dddd= '';
        try {
                foreach ($request->data  as $key => $value) {
        $dddd=                    Scschoolstudentattenddence::
                    where("school_id", Auth::user()->school_id)
                    ->where("teacher_id", Auth::user()->id)
                    ->where("student_id", $value['student_id'])
                     ->where("date", $value['date'])
                    ->where("period", $value['period'])
                    ->update([
                        "attendence_status" =>$value['attendence_status'],
                        "datetime" =>now(),
                        "notes" =>$value['notes'],
                    ]);




     }
                        return response()->json([
                        'message' => 'createattendance success',
                        'data' => $dddd,
                ]);
            } catch (\Throwable $th) {
                return response()->json([
                    'message' => 'createattendance err',
                    'data' => $th,
            ]);
    
            }
    
    
    
    
            }









// ===============================================================
public function saveattendanceold(Request $request){

//     return response()->json([
//         'message' => 'saveattendance',
//         'data' => $request->all(),
// ]);

// try {

    // DB::table('post')
    // ->where('id', 3)
    // ->update(['title' => "Updated Title"]);
    // $attendence_status = ($request->attendence_status===true) ? 1 : 0 ;
if ($request[0]['attendence_status'] ==true) {
    $attendence_status =1;
} else {
    $attendence_status =0;
    # code...
}

$ddd=Scschoolstudentattenddence::where('school_id'  , Auth::user()->school_id)
    // ->where('teacher_id' , Auth::user()->id       )
    // ->where('class_id'   , $request['class_id']   )
    ->where('student_id' , $request['student_id']  )
    ->where('date'       , $request['date']         )
    ->where('period'     , $request['period']       )
    ->update([
        // 'attendence_status' => $request[0]['attendence_status'],
        'attendence_status' => $attendence_status,
        // 'datetime' => now(),//$attendence_status,$request[0]['attendence_status']
]);

$ddd=Scschoolstudentattenddence::all()->where('date', $request[0]['date']         );
// where('school_id'  , Auth::user()->school_id)
    // ->where('teacher_id' , Auth::user()->id       )
    // ->where('class_id'   , $request['class_id']   )
    //  where('student_id' , $request['student_id']  )
    // ->where('date'       , $request['date']         )
    //  where('period'     , $request->period        )->get();
    //  where('period'     , $request['period']       );

    return response()->json([
        'message' => 'saveattendance success',
        'data' => $ddd,
]);




    // $Scschoolstudentattenddence_session = Scschoolstudentattenddence::updateOrCreate(
    //     [
    //         'school_id'  => Auth::user()->school_id,//------
    //         'teacher_id' => Auth::user()->id,//------
    //         'class_id'   => $request->myclass->id,//-------
    //         'subject_id' => $request->mysubject->id,//--------------------
    //         'date'       => $request->date,//------
    //         'period'     => $request->period,//-----
    //         'student_id' => $request->mystudent->id,
    //     ],
    //     // [
            
    //     //     ]
    // );        

// } catch (\Exception $e) {
//         return response()->json([
//             'message' => 'saveattendance err',
//             'data' => $e,
//     ]);







        // }
 }



    
        public function createattendance(Request $request){
    // return response()->json(['message' => 'scheduleupdate']);
//     return response()->json([
//         'message' => 'createattendance',
//         'data' => $request->all(),
// ]);
//     return response()->json([
//         'message' => '$request->date',
//         'data' => $request->date,
// ]);
// SELECT `id`, `school_id`, `class_id`, `student_id`, `teacher_id`, `subject_id`, `period`, `date`, `datetime`, `attendence_status`,
//  `notes`, `created_at`, `updated_at` FROM `scschoolstudentattenddences` WHERE 1;
// class_id: 10
// subject_id: 2
// date: "2022-08-19"
// period: 1
//'school_id'     => Auth::user()->school_id,
$students=User::where('class_id',$request->class_id)->where('school_id',Auth::user()->school_id)->get();

    // return response()->json(['message' => 'scheduleupdate']);

    try {
            foreach ($students as $key => $value) {

                        $Scschoolstudentattenddence_session = Scschoolstudentattenddence::updateOrCreate(
                            [
                                'school_id'  => Auth::user()->school_id,//------
                                'teacher_id' => Auth::user()->id,//------
                                'class_id'   => $request->class_id,//-------
                                'subject_id' => $request->subject_id,//--------------------
                                'date'       => $request->date,//------
                                'period'     => $request->period,//-----
                                'student_id' => $value->id,
                            ],
                            // [
                                
                            //     ]
                        );


            }

            $student_attenddence_session = Scschoolstudentattenddence::with('myschool','myteacher','mystudent','myclass','mysubject')
            ->where('school_id'  , Auth::user()->school_id)
            ->where('teacher_id' , Auth::user()->id       )
            ->where('class_id'   , $request->class_id     )
            ->where('subject_id' , $request->subject_id   )
            ->where('date'       , $request->date         )
            ->where('period'     , $request->period       )->get();

            return response()->json([
                'message'   => 'createattendance done',
                'data'      => $student_attenddence_session,
        ]);

        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'createattendance err',
                'data' => $th,
        ]);

        }




        }
}
