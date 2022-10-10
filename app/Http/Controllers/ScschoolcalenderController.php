<?php

namespace App\Http\Controllers;
use App\Models\scschoolcalender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ScschoolcalenderController extends Controller
{



    public function showtermcalender(Request $request)
    {
        // return response()->json(['message' => $request->all()]);

        $termcalender =   scschoolcalender::where('school_id',Auth::user()->school_id)
        
        ->where('term',$request->term )->get();
        // $scschoolcalenders=scschoolcalender::all();
        return response()->json(['message' => $termcalender]);
    }





    
    public function index()
    {
        $scschoolcalenders=scschoolcalender::all();
        return response()->json(['message' => $scschoolcalenders]);
    }
    public function create()
    {
        return response()->json(['message' => 'create']);
    }
    // ------------------------------------------------------------------------------
    public function store(Request $request)
    {
        if (count($request->dates)>300) {
            return response()->json(['message' =>"sorry more than 300 :". count($request->dates)]);
        }
        // $request->dates
        // return response()->json(['message' => count($request->dates)]);
        // return response()->json(['message' => $request->all()]);
        try {
            // SELECT `id`, `school_id`, `year`, `term`, `week`, `day`, `date`, `work`, `notes`, `created_at`, `updated_at` FROM `scschoolcalenders` WHERE 1;
            $scschoolcalender =   scschoolcalender::where('school_id',Auth::user()->school_id)
            ->where('year',$request->year )
            ->where('term',$request->term );
            $scschoolcalender->delete();
            
            $scschoolcalender->school_id = Auth::user()->school_id;
            $scschoolcalender->year  = $request->year  ;
            $scschoolcalender->term  = $request->term  ;
$weeknumover=date("W", strtotime($request->dates[0]))-1;
$week_no=1;
$firstweek=1;

            foreach ($request->dates as $key => $value) {

                $scschoolcalender = new scschoolcalender();
                $scschoolcalender->school_id = Auth::user()->school_id;
                $scschoolcalender->year  = $request->year  ;
                $scschoolcalender->term  = $request->term  ;

                if (date("w", strtotime($value)) == 0 && $firstweek==2) {
                    $week_no++;            // 0 = Sunday
// if ($firstweek==2) {$firstweek=2;}else{$week_no++;}
// (($firstweek==1)?$firstweek=2:$week_no++);
                 }
$firstweek=2;

                $scschoolcalender->week  = $week_no  ;
                // $scschoolcalender->week  = date("W", strtotime($value))-$weeknumover  ;
                $scschoolcalender->day   = date("w", strtotime($value))+1   ;
                $scschoolcalender->date  =  date("Y-m-d", strtotime($value));
                if(date("w", strtotime($value)) == 5 || date("w", strtotime($value)) == 6){
                    $scschoolcalender->work   = 0   ;
                }
                
                
                
                // date("Y-m-d H:i:s", strtotime("2019-05-13"))
                $scschoolcalender->save();
            }

            $scschoolcalender =   scschoolcalender::where('school_id',Auth::user()->school_id)
            ->where('year',$request->year )
            ->where('term',$request->term )->get();

            return response()->json([
                'message' => 'store done:',
                'data' => $scschoolcalender,
            ]);
        } catch (\Throwable $th) {return response()->json(['message' => 'store failed:'.$th]);}
    }
    // ------------------------------------------------------------------------
    public function show(scschoolcalender $scschoolcalender)// $scschoolcalender single and in the route plurer no need for 
    {
        // scschoolcalender::findOrfailed($id);
        return response()->json(['message' => 'show']);
    }
    public function edit(scschoolcalender $scschoolcalender)
    {
        return response()->json(['message' => 'edit:'.$scschoolcalender]);
    }
    public function update(Request $request, scschoolcalender $scschoolcalender)
    { 
        return response()->json(['message' => 'update']);
        //
    }
    public function destroy(scschoolcalender $scschoolcalender)
    {
        try {
           $scschoolcalender->delete();
            return response()->json(['message' => 'destroy done']);
        } catch (\Throwable $th) {return response()->json(['message' => 'destroy failed:'.$th]);}

    }
}
