<?php

namespace App\Http\Controllers;

use App\Models\scmenu;
use Illuminate\Http\Request;

class ScmenuController extends Controller
{



//    protected  $classname="scmenu";
    public function menuget(){


        try {
            return response()->json(scmenu::all());
        } catch (\Throwable $th) {
            return response()->json([
                'message' => '  error data:'.$th
            ]);
            
        }

    }
//    protected  $classname="scmenu";public function all(Request $request){
    public function menupost(Request $request){

        try {
            return response()->json(scmenu::all());
        } catch (\Throwable $th) {
            return response()->json([
                'message' => '  error data:'.$th
            ]);
            
        }  

    }

   public function menudelete(Request $request)
    {
        $id = $request->id;
        $employee = scmenu::find($id);
        $employee->delete();
        return response()->json([
            'message' => '  post deleted:'.$request->id
        ]);

    }
   public function menuupdate(Request $request)
    {
try {

        $user = scmenu::findOrFail($request->id);
        $user->update($request->all());
        // $user->update($input);$request
        $user->save();

        return response()->json([
            'message' => 'success  post menu update:'.$request->id
        ]);

    //code...
} catch (\Throwable $th) {
    //throw $th;

 
        return response()->json([
            'message' => ' error post menuupdate:'.$th
        ]);   
}




        return $user;



    
        $post = new scmenu;
        $post->catalog = $request->catalog;
        $post->item = $request->item;
        $post->notes1 = $request->notes1;
        $post->save();
        return response()->json([
            'message' => 'New post created'
        ]);
    }
    public function createmenuitem(Request $request)
    {
        // return response()->json([
        //     // 'message' => 'New post created'
        //     $request
        // ]);
        $post = new scmenu;
        $post->catalog = $request->catalog;
        $post->item = $request->item;
        $post->notes1 = $request->notes1;
        $post->save();
        return response()->json([
            'message' => 'New post created'
        ]);
    }
    // get(['name','surname']);
    // Table::where('id', 1)->get(['name','surname']);



// $myclassall = Student::
// where('class_name',$class_name)
// ->where('active',1)
// ->get();
// $myclassall = Mystudent::where('class_name',$myclass)->get(['full_name_en','class_name']);
// dd(response()->json($myclassall));
}
