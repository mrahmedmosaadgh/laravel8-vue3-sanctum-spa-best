<?php

namespace App\Http\Controllers;

use App\Models\scschoolQuizMain;
use App\Models\scschoolQuizQ;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ScschoolQuizSAController extends Controller
{
    //
    // private $x;
    // $this->x;
    // $this->quizColmns;
    private  $quizColmns=['id', 'name', 'grade', 'qs', 'answers', 'corrections', 'mark', 'notes'];

        public function getquizzes(Request $request){

            // DB::where('a', 1)->get($this->quizColmns);
    //         $users = DB::table('users')
    // ->selectRaw('count(*) as user_count, status')
    // ->where('status', '<>', 1)
    // ->groupBy('status')
    // ->get();


    $data = DB::table('quizmain')

    ->where('id',  1)

    ->get($this->quizColmns);
    return response()->json([
        'message' => 'getquizzes done',
        'data' =>$data 
    ]);
    // dd ($users,$this->quizColmns);
        }





    
        public function get_quizzes(Request $request){

            $scschoolQuizall=scschoolQuizMain::all()->where('grade_id',Auth::user()->grade_id);
          $publish=  $scschoolQuizall->first()->publish;
          $publishoff=  $scschoolQuizall->first()->publishoff;
        //   $date_format=  date_format($scschoolQuizall->first()->publish, '%Y-%m-%d');
            $scschoolQuizQ=  scschoolQuizQ::all()->toArray();
            $order=array_keys($scschoolQuizQ);
           shuffle($order);



        //    $to = \Carbon\Carbon::createFromFormat('Y-m-d H:s:i', '2015-5-5 3:30:34');
        //    $from = \Carbon\Carbon::createFromFormat('Y-m-d H:s:i', '2015-5-6 9:30:34');
        //    $diff_in_days = $to->diffInDays($from);


        // $end = Carbon::parse($request->input('end_date'));

        // $current = Carbon::now();
        // $length = $end->diffInDays($current);
        // dd($length);
// $difference = $start->diff($end)->format('%H:%I:%S');
// 
// $publish=  $scschoolQuizall->first()->publish;
        $end = Carbon::parse($publish);
        $publishoff = Carbon::parse($publishoff);
        $publish = Carbon::parse($publish);


        // setlocale(LC_TIME, config('app.locale'));
        //or set locale for your location
        // setlocale(LC_TIME, 'en');
        // Asia/Riyadh
        // (Carbon::now('Asia/Riyadh');
        // Carbon::setLocale(config('app.locale'));
        // $current = Carbon::parse(Carbon::now());
        // $length = $end->diffInDays($current);
        // $diffInHours = $end->diffInHours($current);
        // $diffInMinutes = $end->diffInMinutes($current)-$diffInHours*60;
        // $diffInRealMinutes = $end->diffInRealMinutes($current)-$diffInHours*60;
        // $publishoffdiffInMinutes = $publishoff->diffInMinutes($current);
        // $publishoffGcurrent = $publishoff-$current ;
        // $publishGcurrent = $publish- $current ;
        // $difference = $start->diff($end)->format('%H:%I:%S');
        // $difference = $publishoff->diff($current)->format('%H:%I:%S');
        // date_default_timezone_set("Asia/Riyadh");
        $current = Carbon::now("Asia/Riyadh");
        $difference = $current->diff($publishoff)->format('%H:%I:%S');
        $difference = $current->diff($publishoff);
        $current = Carbon::now("Asia/Riyadh")->format('Y-m-d  H:i:s');
        // $current = Carbon::now()->format('Y-m-d  H:i:s');
        // $difference = $publishoff->diff($current);
        // $current = Carbon::now('Asia/Riyadh','%H:%I:%S');
        // dd($length);Carbon::now()->format('Y-m-d');

        $publish=  $scschoolQuizall->first()->publish;



$data=[
    'quizq'=>$scschoolQuizQ,
    'publish'=>$publish,
    'publishoff'=>$publishoff,
    'current'=>$current,
    // 'diffInHours'=>$diffInHours,
    // 'diffInMinutes'=>$diffInMinutes,
    // 'diffInRealMinutes'=>$diffInRealMinutes,
    // 'publishoffGcurrent'=>$publishoffGcurrent,
    // 'publishGcurrent'=>$publishGcurrent,
    'difference'=>$difference,
    'end'=>$end,
    'order'=>$order,
    'scschoolQuizall'=>$scschoolQuizall,
    'grade_id'=>Auth::user()->grade_id,
    'id'=>Auth::user()->id,

];
    return response()->json([
        'message' => 'ScschoolQuizSAController get_quizzes done',
        'data' =>$data 
    ]);
    // return response()->json(['message' => 'get_quizzes from ScschoolQuizSAController ']);
    //  return response()->json(['message' => $request->all()]);
        }
}
