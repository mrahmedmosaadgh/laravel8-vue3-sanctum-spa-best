<?php

namespace App\Http\Controllers;

use App\Models\ScschoolParticipation;
use App\Models\scschoolWeeklyCalssRecord;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ScschoolParticipationController extends Controller
{

     public function get_weekly_c_recs(Request $request){   

$data=scschoolWeeklyCalssRecord::with(
    'myschool',
    'myteacher',
    'mystudent',
    'myclass',
    'mysubject',
)->get();

 
        return response()->json([
            'message' => 'get_weekly_c_recs success -----',
            'data' => $data,
            // 'data' =>$request->data['round'],
            // 'data' => $lastRound,
    ]);





     }



    public function get_participation_plus_marks(Request $request){
        $lastRound = ScschoolParticipation::all()->
        where('school_id' , Auth::user()->school_id)
        ->where('teacher_id' , Auth::user()->id)->max('round');

        $ScschoolParticipation=ScschoolParticipation::all()->
        where('school_id' , Auth::user()->school_id)
        ->where('teacher_id' , Auth::user()->id)
        ->where('student_id' , $request->data['student_id']);
        // $maxValue = Cliente::max('id');
        
        // ->get('mark');
        $plusAll=$ScschoolParticipation->where('type' , '+')->sum('mark');
        $plusAll_thisweek=$ScschoolParticipation->where('type' , '+')->where('week' , $request->data['week'])->sum('mark');
        $plusAll_thisround=$ScschoolParticipation->where('type' , '+')->where('round' , $lastRound)->sum('mark');
        
        // // $minusAll=$ScschoolParticipation->get('mark','type');
        $minusAll=$ScschoolParticipation->where('type' , '-')->sum('mark');
        // $minusAll=$ScschoolParticipation->where('type' , '-')->sum('mark');
        $minusAll_thisweek=$ScschoolParticipation->where('type' , '-')->where('week' , $request->data['week'])->sum('mark');
        $minusAll_thisround=$ScschoolParticipation->where('type' , '-')->where('round' , $lastRound)->sum('mark');
        

        $data=[
            // 'ScschoolParticipation'           => $ScschoolParticipation           ,
            'lastRound'           => $lastRound           ,
            'plusAll'           => $plusAll           ,
            'plusAll_thisweek'  => $plusAll_thisweek  ,
            'plusAll_thisround' => $plusAll_thisround ,
            'minusAll'          => $minusAll          ,
            'minusAll_thisweek' => $minusAll_thisweek ,
            'minusAll_thisround'=> $minusAll_thisround,
        ];
        
                                        return response()->json([
                                        'message' => 'marks all success -----',
                                        'data' => $data,
                                        // 'data' =>$request->data['round'],
                                        // 'data' => $lastRound,
                                ]);




    }
    // -----------------------------------------------------------------------
    public function participation(Request $request){
        $lastRound = ScschoolParticipation::all()->
        where('school_id' , Auth::user()->school_id)
        ->where('teacher_id' , Auth::user()->id)->max('round');

$dataAll=[

'class_id'           =>$request->data['class_id'           ],
'student_id'         =>$request->data['student_id'         ],
'teacher_id'         =>$request->data['teacher_id'         ],
'school_id'          =>$request->data['school_id'          ],
'scschoolschedule_id'=>$request->data['scschoolschedule_id'],
'period'             =>$request->data['period'             ],
'date'               =>$request->data['date'               ],
'week'               =>$request->data['week'               ],
'subject_id'         =>$request->data['subject_id'         ],
'notes'              =>$request->data['notes'              ],
'mark'               =>$request->data['mark'               ],
'round'              =>$lastRound,
'type'               =>$request->data['type'               ],




];



    //     return response()->json([
    //         'message' => 'participation',
    //         'data'=> $request->data ,
    //         // 'data'=> $request->data['student_id'] ,
    // ]);


    // participations:{
    //      "class_id": 1, "student_id": 142, "scschoolschedule_id": 4,
    //       "period": 5, "date": 6,
    //      "week": 7, "subject_id": 8, "notes": 9, "mark": 5, "type": "-"
    //      }
// $request->data['date']=now();
// $request->data['school_id']=Auth::user()->school_id;
// $request->data['teacher_id']=Auth::user()->id;
// 'school_id'=>Auth::user()->school_id,
                try {
// updateOrCreate----------------------------------------------
//                     ScschoolParticipation::updateOrCreate($request->data,$request->data);

// return;
// updateOrCreate----------------------------------------------

// $request->data['round']=$lastRound;
// $request->merge([
//     'user_id' => $modified_user_id_here,
// ]);

// $request->data->merge([
//     'round' => $lastRound,
// ]);

 ScschoolParticipation::insert($dataAll);
//  ScschoolParticipation::insert($request->data);

$ScschoolParticipation=ScschoolParticipation::all()->
where('school_id' , Auth::user()->school_id)
->where('teacher_id' , Auth::user()->id)
->where('student_id' , $request->data['student_id']);
// $maxValue = Cliente::max('id');

// ->get('mark');
$plusAll=$ScschoolParticipation->where('type' , '+')->sum('mark');
$plusAll_thisweek=$ScschoolParticipation->where('type' , '+')->where('week' , $request->data['week'])->sum('mark');
$plusAll_thisround=$ScschoolParticipation->where('type' , '+')->where('round' , $lastRound)->sum('mark');

// // $minusAll=$ScschoolParticipation->get('mark','type');
$minusAll=$ScschoolParticipation->where('type' , '-')->sum('mark');
// $minusAll=$ScschoolParticipation->where('type' , '-')->sum('mark');
$minusAll_thisweek=$ScschoolParticipation->where('type' , '-')->where('week' , $request->data['week'])->sum('mark');
$minusAll_thisround=$ScschoolParticipation->where('type' , '-')->where('round' , $lastRound)->sum('mark');


$data=[
    // 'ScschoolParticipation'           => $ScschoolParticipation           ,
    'lastRound'           => $lastRound           ,
    'plusAll'           => $plusAll           ,
    'plusAll_thisweek'  => $plusAll_thisweek  ,
    'plusAll_thisround' => $plusAll_thisround ,
    'minusAll'          => $minusAll          ,
    'minusAll_thisweek' => $minusAll_thisweek ,
    'minusAll_thisround'=> $minusAll_thisround,
];

                                return response()->json([
                                'message' => 'participation insert success -----',
                                'data' => $data,
                                // 'data' =>$request->data['round'],
                                // 'data' => $lastRound,
                        ]);
                    } catch (\Exception $th) {
                        return response()->json([
                            'message' => 'participation insert err',
                            'data' => $th,
                    ]);

                    }

        }
         }