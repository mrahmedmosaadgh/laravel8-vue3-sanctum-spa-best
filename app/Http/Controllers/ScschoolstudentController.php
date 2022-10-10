<?php

namespace App\Http\Controllers;

use App\Models\scschoolstudent;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ScschoolstudentController extends Controller
{


// createfromexcel
public function createfromexcel(Request $request)
    {
        return response()->json(['message' =>'student']);
        if (!Auth::check()){return response()->json(['message' => 'error Auth' ]); }
            $headarray=array_keys(  $request->all()[0]);
            // return response()->json(['message' =>  $headarray ]);
            $datadb=$request->all();
            $errrorcreate="";
        for ($i=0; $i <count($datadb) ; $i++) {
        // return response()->json(['message' => $request->all() ]);
        $namerand=rand(10000000, 99999999999). Carbon::now()->timestamp;
        $userdatatocreate=[

            'name'        =>$namerand,
            'email'       => $namerand .'@schooleverything.com',
            'password'    => Hash::make('@12345678'),
            'schoolgroup_id'=> Auth::user()->schoolgroup_id,
            'school_id'     => Auth::user()->school_id,
            'usertype'    =>'student',
            'nid'      =>$datadb[$i][ $headarray[1]],
            'nameen'   =>$datadb[$i][ $headarray[2]],
            'namear'   =>$datadb[$i][ $headarray[3]],
            'classname'=>$datadb[$i][ $headarray[4]],
            'notes1'   =>$datadb[$i][ $headarray[5]],
            'createdby'=>Auth::user()->id


        ];

        try {
            $user = User::create($userdatatocreate);
        } catch (\Throwable $th) {
          $errrorcreate +=$th;
        }
        // return response()->json(['message' => $userdatatocreate ]);
// 'nid'      =>$datadb[$i][ $headarray[1]],
// 'nameen'   =>$datadb[$i][ $headarray[2]],
// 'namear'   =>$datadb[$i][ $headarray[3]],
// 'classname'=>$datadb[$i][ $headarray[4]],
// 'notes1'=>$datadb[$i][ $headarray[5]],


// 'createdby'=>$datadb[$i][ $headarray[1]],
        // return response()->json(['message' => '$userdatatocreate' ]);
        // return response()->json(['message' => $userdatatocreate ]);
    // try {
    //      $user = User::create($userdatatocreate);
    //     //  return response()->json(['message' => $user ]);
    //         $create = new scschoolteacher;
    //         $create->teacher_id       =$user->id;
    //         $create->schoolgroup_id   =Auth::user()->schoolgroup;
    //         $create->school_id        =Auth::user()->school;
    //         $create->namear           =$datadb[$i][ $headarray[1]];
    //         $create->nameen           =$datadb[$i][ $headarray[2]];
    //         $create->subjects         =$datadb[$i][ $headarray[3]];
    //         $create->classes          =$datadb[$i][ $headarray[4]];
    //         $create->stage            =$datadb[$i][ $headarray[5]];
    //         $create->notes1           =$datadb[$i][ $headarray[6]];
    //         $create->save();
    // }
    // catch (\Throwable $th) {
    //     return response()->json(['message' => ' error - not   created']);
    // }
}
return response()->json(['message' => ' sucess   created '.count($datadb) ." students".$errrorcreate ]);

}//createfromexcel---------------------------------------------------------------------------





    public function createone(Request $request)
    {
        // return response()->json(['message' => $request->all() ]);
        if (!Auth::check()){return response()->json(['message' => 'error Auth' ]); }
        $logedinUser=Auth::user();
        $reqdata=$request->datatodb;
        $colnameuser=$request->colnamesusers;
        // $colnames=$request->colnames;

        //create new user in users table//
        $namerand=rand(10000000, 99999999999). Carbon::now()->timestamp;
        // return response()->json(['message' => $namerand ]);
        $newuserdata=[  'name' =>$namerand,
        $colnameuser[0] =>$request->datatodb[0],
        $colnameuser[1] =>$request->datatodb[1],
        $colnameuser[2] =>$request->datatodb[2],
        $colnameuser[3] =>$request->datatodb[3],
        $colnameuser[4] =>$request->datatodb[4],
        $colnameuser[5] =>$request->datatodb[5],
        'schoolgroup_id' =>$logedinUser->schoolgroup_id,
        'school_id'      =>$logedinUser->school_id,
                        // 'namear' =>$request->datatodb['namear'],
                        // 'name' =>$namerand,
                        // 'name' =>$namerand,
                        // 'name' =>$namerand,
                        // 'name' =>$namerand,
                        'createdby'     =>$logedinUser->id,
                        'email' => $namerand .'@schooleverything.com',
                        'password' => Hash::make('@12345678'),];
                        
                        $user = User::create($newuserdata);
                        return response()->json(['message' => $newuserdata]);

    try {
        // foreach ($request->className as $value) {
            // `id`, `schoolgroup_id`, `school_id`,
            //  `teacher_id`, `namear`, `nameen`, `subjects`,
            //   `classes`,
            //   `stage`, `notes1`,
            //  `notes2`, `notes3`, `created_at`, `updated_at`

            // `id`, `name`, `email`, `email_verified_at`, `password`, `usertype`,
            // `schoolgroup_id`, `school_id`, `nid`, `nameen`, `namear`,
            //  `active`, `createdby`, `notes1`, `notes2`, `notes3`

                    $create = new scschoolstudent;
            for ($i=0; $i <count($reqdata) ; $i++)  { $create->$colnameuser[$i] = $reqdata[$i];}
                    $create->schoolgroup_id =$logedinUser->schoolgroup_id;
                    $create->school_id      =$logedinUser->school_id;
                    $create->student_id     =$user->id;
                    $create->createdby     =$user->id;
                    $create->save();


            // `id`, `schoolgroup_id`, `school_id`, `student_id`,
            // `stage`, `classname`, `parent_id`,
            //  `notes1`, `notes2`, `notes3`, `created_at`, `updated_at`
        //   }
          return response()->json(['message' => ' sucess   created' ]);
            }
        catch (\Throwable $th) {
            return response()->json(['message' => ' error - not   created']);
            }

}//create---------------------------------------------------------------------------
}
