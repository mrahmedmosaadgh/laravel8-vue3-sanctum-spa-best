<?php

namespace App\Http\Controllers;
use App\Models\scschoolclass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;    
class ScschoolclasseController extends Controller
{

public function allget(){
    // $scschoolclass=scschoolclass::all();

        try {
            return response()->json(scschoolclass::all());
        } catch (\Throwable $th) {
            //throw $th;
        }
        
        // $menu=scschoolclass::all()->sortBy("itemorder");
        // $menu=scschoolclass::orderBy('itemorder')->get(['id','catalog','item','itemorder','notes1']); 

        // $results = Project::orderBy('name')->get();
        // $results = Project::orderBy('name')->get();
}//all---------------------------------------------------------------------------


public function all(Request $request){
    // return response()->json(['message' => 'all scschoolclass' ]);
    if (!Auth::check()){return response()->json(['message' => 'error Auth' ]); }

        try {
            $scschoolclass=scschoolclass::where('school_id',Auth::user()->school_id)->where('schoolgroup_id',Auth::user()->schoolgroup_id)->get();
            // $scschoolclass=scschoolclass::where('school_id',$school_id)->where('schoolgroup_id',$schoolgroup_id)->orderBy('className')->get();;
            return response()->json(['message' => $scschoolclass  ]);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'error scschoolclass' ]);
            //throw $th;
        }

        // $menu=scschoolclass::all()->sortBy("itemorder");
        // $menu=scschoolclass::orderBy('itemorder')->get(['id','catalog','item','itemorder','notes1']); 

        // $results = Project::orderBy('name')->get();
        // $results = Project::orderBy('name')->get();
}//all---------------------------------------------------------------------------


public function create(Request $request)
    {
            // id         : 2
            // school     : null
            // schoolgroup: null
                    //  schoolgroup_id
                    //  school_id     
                    //  stage         
                    //  className     
                    //  nameLong      

        if (Auth::check()) {
            $all         =Auth::user()         ;
            $id         =Auth::user()->id          ;
            $school     =Auth::user()->school_id      ;
            $schoolgroup=Auth::user()->schoolgroup_id ;
        }else{return response()->json(['message' => 'error Auth' ]); }
             

    try {
        foreach ($request->className as $value) {
            $create = new scschoolclass;
            $create->school_id = $school;
            $create->schoolgroup_id = $schoolgroup;
            $create->className = $value;
            $create->createdby = $id;
            $create->save();                
          }
          return response()->json(['message' => ' sucess   created' ]);
            }
        catch (\Throwable $th) {
            return response()->json(['message' => ' error - not   created']);
            }  

               
}//create---------------------------------------------------------------------------

public function createone(Request $request)
    {
            // id         : 2
            // school     : null
            // schoolgroup: null
                    //  schoolgroup_id
                    //  school_id     
                    //  stage         
                    //  className     
                    //  nameLong      

        if (Auth::check()) {
            $all         =Auth::user()         ;
            $id         =Auth::user()->id          ;
            $school     =Auth::user()->school      ;
            $schoolgroup=Auth::user()->schoolgroup ;
        }else{return response()->json(['message' => 'error Auth' ]); }
             

    try {
        // foreach ($request->className as $value) {
            $create = new scschoolclass;
            $create->school_id = $school;
            $create->schoolgroup_id = $schoolgroup;
            // $create->className = $value;
            $create->createdby = $id;
            $create->stage     = $request->stage;
            $create->className = $request->className;
            $create->nameLong  = $request->nameLong;
            $create->notes1    = $request->notes1;
            $create->save();
    // stage
    // className
    // nameLong
    // notes1
            //   }
          return response()->json(['message' => ' sucess   created' ]);
            }
        catch (\Throwable $th) {
            return response()->json(['message' => ' error - not   created']);
            }  

               
}//createone




public function update(Request $request)
    {
    try {

        $update = scschoolclass::findOrFail($request->id);
        $update->update($request->all());
        $update->save();

        return response()->json(['message' => 'success  updated:'.$request->id]);
         }   
    catch (\Throwable $th) 
        {
        return response()->json(['message' => ' error update:'.$th]);      
        }
}//update---------------------------------------------------------------------------
public function updateall(Request $request)
    {
        // return response()->json(['message' =>  $request->data[0]]);
        // return response()->json(['message' =>  $request->all()]);
        // return $request->all();
    try {
for ($i=0 ; $i < count($request->data) ;   $i++) {
        $update = scschoolclass::findOrFail($request->data[$i][0]);
        // >update(['title'=>'Updated title']);
        $update->update([
            'className'=>$request->data[$i][1],
            'stage'    =>$request->data[$i][2],
            'nameLong' =>$request->data[$i][3],
            'notes1'   =>$request->data[$i][4],
        ]);
        $update->save();
}



        return response()->json(['message' => 'success  updated']);
         }   
    catch (\Throwable $th) 
        {
        return response()->json(['message' => ' error update:'.$th]);      
        }
}//update---------------------------------------------------------------------------

public function updatecolval(Request $request)
    {
    //     return response()->json(['message' => $request->all()]);
    //     return 'public function updatecolval(Request $request)';
    //     return $request->all();
    try {
        // $colname=$request->colname;
        // $colid=$request->id;
        // $coldata=$request->coldata;

        $update = scschoolclass::findOrFail($request->id);
        $update->update($request->all());
        $update->save();

        return response()->json(['message' => 'success  updated']);
         }   
    catch (\Throwable $th) 
        {
        return response()->json(['message' => ' error update:'.$th]);      
        }
}//update---------------------------------------------------------------------------



public function delete(Request $request)
    {
    try {
    scschoolclass::find($request->id)->delete();

        return response()->json(['message' => 'success  deleted:'.$request->id]);
         }   
    catch (\Throwable $th) 
        {
        return response()->json(['message' => ' error deleted:'.$th]);      
        }

}//delete---------------------------------------------------------------------------

    }
