<?php

namespace App\Http\Controllers;

use App\Models\scschoolclassteachersubject;
use App\Models\scschoolQuizMain;
use App\Models\scschoolschedule;
use App\Models\Scschoolstudentattenddence;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ScschoolstudentHomeController extends Controller
{
        public function get_quizzes(Request $request){

            $scschoolQuizall=scschoolQuizMain::where('school_id',Auth::user()->school_id)
            ->where('grade_id',Auth::user()->grade_id)->select(
                "id",  "publish", "publishoff", "name",  "chapter", "lesson","notes"
            )->get()
            // "id", "school_id", "publish", "publishoff", "name", "stage", "sharestudent_ids", "weekly_id", "grade_id", "subject_id", "lesson_id", "chapter", "lesson", "public", "active", "createdby", "notes", "created_at", "updated_at"
            ;

            return response()->json([
                'message' => 'ScschoolQuizSAController get_quizzes done',
                'data' =>$scschoolQuizall 
            ]);

    return response()->json(['message' => 'get_quizzes']);
     return response()->json(['message' => $request->all()]);
        }
    //lastactive lastlogin lastonline
    public function get_lastlogin(Request $request){
        try {
          $get_lastlogin=  User::
            where("school_id", Auth::user()->school_id)
            ->where("id", $request->id)->get()->first();
            // ->where("id", $request->id)->get('lastactive','lastlogin','lastonline')->first();


            // return response()->json(['message' => 'get_lastlogin:'.$get_lastlogin]);
            return response()->json(['message' => 'get_lastlogin:'.$get_lastlogin]);

        } catch (\Throwable $th) {
            return response()->json(['message' => 'lastlogin error ----------'.$th]);
        
        }
        
        
                }


        public function lastlogin(){
            try {
                //code...

                            User::
                                        where("school_id", Auth::user()->school_id)
                                        ->where("id", Auth::user()->id)
                                        ->update([
                                            "lastlogin" =>now(),
                                        ]);
    return response()->json(['message' => 'lastlogin done ----------']);

} catch (\Throwable $th) {
    return response()->json(['message' => 'lastlogin error ----------'.$th]);

}


        }



        public function lastonline(){
            try {
                //code...

                            User::
                                        where("school_id", Auth::user()->school_id)
                                        ->where("id", Auth::user()->id)
                                        ->update([
                                            "lastonline" =>now(),
                                        ]);
    return response()->json(['message' => 'lastonline done ----------']);

} catch (\Throwable $th) {
    return response()->json(['message' => 'lastonline error ----------'.$th]);

}
}








    
        public function studentData(Request $request){
    // return response()->json(['message' => 'studentData----------']);
          
            // "id": 18, "name": "Moaz_Ahmed_Afifi", "email": "2435351883@schooleverything.com", "email_verified_at": null, "usertype": "student", "schoolgroup_id": "1", "school_id": 1, "class_id": 11, "nid": "2435351883", "nameen": "Moaz Ahmed Esmail Afifi", "namear": "", "classname": "5A", "parent_id": null, "subjects": null,
            //  "lang": "en", "active": 1, "createdby": 8, "notes": null, "creat
          
            $data=Auth::user();
            $student_id=$data->id;
            $class_id=$data->class_id;
            $school_id=$data->school_id;
            $parent_id=$data->parent_id ;
$schedule=scschoolschedule::all();
// $schedule=scschoolschedule::all()->where('class_id',$data->class_id);

// Datamain::whereHas('schools', function($query) use ($school) {
//     $query->where('school',$school);
// })->get();

// $schedule=scschoolschedule::whereHas('scschoolclassteachersubject_id', function($query) use ($class_id) {
//     $query->where('class_id',$class_id);
// })->get();

$schedule=scschoolschedule::with('mycts',    'mycts.myclasses',
'mycts.mysubjects',
'mycts.myteachers',

'mycts.myschedules')->whereHas('mycts', function($query) use ($class_id) {
    $query->where('class_id',$class_id);
})->orderBy('day', 'ASC')->get();

// 'mycts.mystudents',
// $mysubjects=$users = DB::table('users')
// ->select('id','name', 'email')
// ->groupBy('name')
// ->get();

$mysubjects= scschoolclassteachersubject::with('mysubjects')
->where('school_id',Auth::user()->school_id)
->where('class_id',Auth::user()->class_id) 
->select('subject_id')
                           ->groupBy('subject_id')
                           ->get();
// ->groupBy('subject_id');
// ->get()
$myabsents=Scschoolstudentattenddence::with('mysubject','myteacher')
->where('school_id',Auth::user()->school_id)
->where('attendence_status',0)

// ->where('class_id',Auth::user()->class_id);
->where('student_id',Auth::user()->id)->get();


try {
    //code...

$myabsentsum=Scschoolstudentattenddence::
where('school_id',Auth::user()->school_id)
// ->where('class_id',Auth::user()->class_id)
->where('student_id',Auth::user()->id)
->where('attendence_status',0)
// ->sum('attendence_status');
->count();
// ->select('subject_id')
// ->groupBy('subject_id')
// ->get();
// ->select('class_id')
// ->groupBy('class_id')
// ->get();


// ->groupBy('attendence_status')


// myattendanceTotal

$studentData=[
    'data'       =>$data       ,
    'schedule'   =>$schedule   ,
    'mysubjects' =>$mysubjects ,
    'myabsents'  =>$myabsents  ,
    'myabsentsum'=>$myabsentsum,
];
    // return response()->json(['message' => 'scheduleupdate']);
    return response()->json([
        'message' => 'studentData from controller Done-----:',
        'data' => $studentData,
    ]);




} catch (\Throwable $th) {
    return response()->json([
        'message' => 'studentData from controller errr-----:',
        'data' => $th,
    ]);
}
        }
}
