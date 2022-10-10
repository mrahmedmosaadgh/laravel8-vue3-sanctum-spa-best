<?php

namespace App\Http\Controllers;

use App\Models\scschoolsubject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ScschoolsubjectController extends Controller
{
    //
    public function all(Request $request){
        // return response()->json(['message' => 'all scschoolsubject' ]);
        if (!Auth::check()){return response()->json(['message' => 'error Auth' ]); }
    
            try {
                $scschoolsubject=scschoolsubject::where('school_id',Auth::user()->school_id)->where('schoolgroup_id',Auth::user()->schoolgroup_id)->get();
                // $scschoolsubject=scschoolsubject::where('school_id',$school_id)->where('schoolgroup_id',$schoolgroup_id)->orderBy('className')->get();;
                return response()->json(['message' => $scschoolsubject  ]);
            } catch (\Throwable $th) {
                return response()->json(['message' => 'error scschoolsubject' ]);
                //throw $th;
            }
    
            // $menu=scschoolsubject::all()->sortBy("itemorder");
            // $menu=scschoolsubject::orderBy('itemorder')->get(['id','catalog','item','itemorder','notes1']); 
    
            // $results = Project::orderBy('name')->get();
            // $results = Project::orderBy('name')->get();
    }//all---------------------------------------------------------------------------
    
}
