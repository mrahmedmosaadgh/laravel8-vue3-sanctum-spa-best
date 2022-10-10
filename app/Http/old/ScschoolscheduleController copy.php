<?php

namespace App\Http\Controllers;

use App\Models\scschoolcalender;
use App\Models\scschoolclassteachersubject;
use App\Models\scschoolschedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ScschoolscheduleController extends Controller
{
public function scheduleupdate(Request $request){

        $newclass_id=intval($request->newclass_id);
        $teacher_id=intval(Auth::user()->id);
        // return response()->json(['message' => '$request->newclass_id:'.$request->newclass_id]);

        if ($request->newclass_id=='') {

            try {
                if (scschoolschedule::find($request->myschedule_id)) {
                    # code...
                    scschoolschedule::find($request->myschedule_id)->delete();
                    return response()->json(['message' => 'success  deleted:'.$request->id]);
                }
            
                    }   
                catch (\Throwable $th) 
                    {
                    return response()->json(['message' => ' error deleted:'.$th]);      
                    }
        }






    $scschoolclassteachersubject_id_new=scschoolclassteachersubject::all()
    ->where('school_id',Auth::user()->school_id)
    ->where('class_id',$newclass_id)
    ->where('teacher_id',$teacher_id)->first()->id
    ;//myschedule
    if ($request->myschedule_id=='') {

    try {
        
        $create = new scschoolschedule;
        $create->scschoolclassteachersubject_id = $scschoolclassteachersubject_id_new;
        $create->day = $request->day;
        $create->period = $request->period;
        $create->school_id = Auth::user()->school_id;
        
        $create->save();
            return response()->json(['message' => 'success  new:']);
             }   
        catch (\Throwable $th) 
            {
            return response()->json(['message' => ' error deleted:'.$th]);      
            }
                }





        try {
                $update = scschoolschedule::findOrFail($request->myschedule_id);

                $update->update([
                    'scschoolclassteachersubject_id'=>$scschoolclassteachersubject_id_new,

                ]);
                $update->save();
                return response()->json(['message' => 'success']);

        } catch (\Throwable $th) {
            //throw $th;
            return response()->json(['message' => 'err:'.$th]);
        }




// return response()->json(['message' => Auth::user()->school_id.':'.$class_id.':'.Auth::user()->id]);
// return response()->json(['message' => $scschoolclassteachersubject_id]);



    }

    //schedule

    public function schedule2(){

        return response()->json(['message1' => 'schedule--------------- ']); 



    }
    public function schedule(){

return response()->json(['message' => 'schedule--------------- ']); 
        try {
            //code...

        // return response()->json(['message' => '$scschoolschedule ']); 

    //   $scschoolschedule=  scschoolschedule::with('cts','cts.myclasses','cts.mysubjects','cts.myteachers','cts.mystudents')->
    //   $scschoolschedule=  scschoolschedule::with('mycts','mycts.myclasses')->get();
      $scschoolschedule=  scschoolschedule::with('mycts','mycts.myclasses','mycts.mysubjects')
      
    //   ->get();
        ->where('school_id' ,Auth::user()->school_id)
        // ->where('teacher_id',Auth::user()->id       )->get();
        ->orderBy('day', 'asc')

        // // ->get()

        // ->groupBy('day')->get();

        // ->orderBy('day', 'desc')

        // ->groupBy('day')

        ->get();
        $scschoolclassteachersubjects=scschoolclassteachersubject::with('myclasses','mysubjects','myteachers','mystudents')->
        where('teacher_id',Auth::user()->id)
        ->where('school_id',Auth::user()->school_id)->get();

        // date("Y-m-d")
        $calendertoday=scschoolcalender::all()->
        where('date',date("Y-m-d"))
        ->where('school_id',Auth::user()->school_id)->first();

                // $calenderthisweek=scschoolcalender::all()->
                $calenderthisweek=scschoolcalender::
                where('year',$calendertoday->year)
                ->where('term',$calendertoday->term)
                ->where('week',$calendertoday->week)
                // ->where('school_id',Auth::user()->school_id)->orderBy('day', 'ASC');
                ->where('school_id',Auth::user()->school_id)->orderBy('day', 'ASC')->get();
$data=[
'schedule'=>$scschoolschedule,
'cts'     =>$scschoolclassteachersubjects,
'calenderthisweek'     =>$calenderthisweek,

];
        // ->groupBy('fromId')
    return response()->json(['message' => $data ]); 



} catch (\Throwable $th) {
    return response()->json(['message' => $th ]); 

}



    }
}
