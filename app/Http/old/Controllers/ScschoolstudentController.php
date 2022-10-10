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
        // return response()->json(['message' =>'student']);
        if (!Auth::check()){return response()->json(['message' => 'error Auth' ]); }





        // ["nid","nameen","name","classname","email",
        // "email_verified_at","password","usertype","schoolgroup_id","school_id","active","createdby"]
            $headarray=array_keys(  $request->all()[0]);
            // return response()->json(['message' =>  $request->all() ]);
            // return response()->json(['message' =>  $headarray ]);

            $datadb=$request->all();
            $errrorcreate="";
        for ($i=0; $i <count($datadb) ; $i++) {

                    $nid_is_exist=user::all()->where('nid',$datadb[$i]['nid'      ]);
                    if (count($nid_is_exist)>0) {
                       return response()->json(['message' => 'National id found before in the database' ]);
                    }
// return response()->json(['message' => 'not found' ]);

        // return response()->json(['message' => $request->all() ]);
        // $namerand=rand(10000000, 99999999999). Carbon::now()->timestamp;
        // $userdatatocreate=[

        //     'name'        =>$namerand,
        //     'email'       => $namerand .'@schooleverything.com',
        //     'password'    => Hash::make('@12345678'),
        //     'schoolgroup_id'=> Auth::user()->schoolgroup_id,
        //     'school_id'     => Auth::user()->school_id,
        //     'usertype'    =>'student',
        //     'nid'      =>$datadb[$i][ $headarray[1]],
        //     'nameen'   =>$datadb[$i][ $headarray[2]],
        //     'namear'   =>$datadb[$i][ $headarray[3]],
        //     'classname'=>$datadb[$i][ $headarray[4]],
        //     'notes1'   =>$datadb[$i][ $headarray[5]],
        //     'createdby'=>Auth::user()->id


        // ];
        // nid	nameen	name	classname	usertype
// 
// $firstlast=split_name($datadb[$i]['nameen'   ]);


// $name = trim($datadb[$i]['nameen'   ]);
// $last_name = (strpos($name, ' ') === false) ? '' : preg_replace('#.*\s([\w-]*)$#', '$1', $name);
// $first_name = trim( preg_replace('#'.preg_quote($last_name,'#').'#', '', $name ) );
// $firstlast=array($first_name, $last_name);
//-----name-------------------------------------------------------------------------
    $namearray  = explode(" ", trim(strtolower($datadb[$i]['nameen'   ])));
    $first_name = ucfirst($namearray[0]);
    $sec_name   = ucfirst($namearray[1]);
    $num        =count($namearray)-1;
    $last_name  = ucfirst($namearray[$num]);
$name=  $first_name.'_'.$sec_name.'_'.$last_name ;
//-----name-------------------------------------------------------------------------

// -----------check if data ready-------------------------------------------------------
if (
    !isset($datadb[$i]['nid'      ])  ||
    !isset($datadb[$i]['nameen'   ])  ||
    !isset($datadb[$i]['classname'])
) {
    return response()->json(['message' =>  'data missing->nid,nameen,classname' ]);
}
// -------------check if namear -----------------------------------------------------
$namear='';
if (isset($datadb[$i]['namear'   ])) {$namear=$datadb[$i]['namear'   ];}
else{ $namear='';}
// ------------------------------------------------------------------

// return response()->json(['message' =>  $namear ]);



        $userdatatocreate=[
            'schoolgroup_id'=> Auth::user()->schoolgroup_id,
            'school_id'     => Auth::user()->school_id,
            'createdby'     =>Auth::user()->id,

            'nid'         =>$datadb[$i]['nid'      ],
            'nameen'      =>$datadb[$i]['nameen'   ],
            'classname'   =>$datadb[$i]['classname'],
            'name'        =>$name,
            'namear'      =>$namear,
            'email'       =>$datadb[$i]['nid'    ].'@schooleverything.com',
            'password'    =>Hash::make('@12345678'),
            'usertype'    =>'student',
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


// uses regex that accepts any word character or hyphen in last name
    public function split_name($name) {
    $name = trim($name);
    $last_name = (strpos($name, ' ') === false) ? '' : preg_replace('#.*\s([\w-]*)$#', '$1', $name);
    $first_name = trim( preg_replace('#'.preg_quote($last_name,'#').'#', '', $name ) );
    return array($first_name, $last_name);
}


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
