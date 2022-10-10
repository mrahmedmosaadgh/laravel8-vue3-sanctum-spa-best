<?php

namespace App\Http\Controllers;

use App\Models\scschoolteacher;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ScschoolteacherController extends Controller
{
    public function all(Request $request){
        //  $scschoolteacher=scschoolteacher::all();
        // return response()->json($scschoolteacher);
        // schoolgroup_id: 1, school_id: 1
        if (!Auth::check()) {return response()->json(['message' => 'error Auth' ]); }
        // 'schoolgroup_id'=> Auth::user()->schoolgroup_id,
        // 'school_id'     => Auth::user()->school_id,
            try {
                $scschoolteacher=User::where('school_id',Auth::user()->school_id)->where('schoolgroup_id', Auth::user()->schoolgroup_id)->
                where('usertype','teacher')->get();
                // $scschoolteacher=scschoolteacher::where('school_id',$school_id)->where('schoolgroup_id',$schoolgroup_id)->orderBy('className')->get();;
                return response()->json(['message' => $scschoolteacher  ]);
            } catch (\Throwable $th) {
                return response()->json(['message' => 'error scschoolteacher' ]);
                //throw $th;
            }
    
            // $menu=scschoolteacher::all()->sortBy("itemorder");
            // $menu=scschoolteacher::orderBy('itemorder')->get(['id','catalog','item','itemorder','notes1']); 
    
            // $results = Project::orderBy('name')->get();
            // $results = Project::orderBy('name')->get();
    }//all---------------------------------------------------------------------------
    
    
// public function all(Request $request){
//     //  $scschoolteacher=scschoolteacher::all();
//     // return response()->json($scschoolteacher);
//     // schoolgroup_id: 1, school_id: 1
//     if (Auth::check()) {    
//     $all           =Auth::user()         ;
//     // $id            =$all->id          ;
//     $school_id     =$all->school      ;
//     $schoolgroup_id=$all->schoolgroup ;
//     }else{return response()->json(['message' => 'error Auth' ]); }

//         try {
//             $scschoolteacher=scschoolteacher::where('school_id',$school_id)->where('schoolgroup_id',$schoolgroup_id)->get();
//             // $scschoolteacher=scschoolteacher::where('school_id',$school_id)->where('schoolgroup_id',$schoolgroup_id)->orderBy('className')->get();;
//             return response()->json(['message' => $scschoolteacher  ]);
//         } catch (\Throwable $th) {
//             return response()->json(['message' => 'error scschoolteacher' ]);
//             //throw $th;
//         }

//         // $menu=scschoolteacher::all()->sortBy("itemorder");
//         // $menu=scschoolteacher::orderBy('itemorder')->get(['id','catalog','item','itemorder','notes1']); 

//         // $results = Project::orderBy('name')->get();
//         // $results = Project::orderBy('name')->get();
// }//all---------------------------------------------------------------------------


public function create(Request $request)
    {
        // $now = new DateTime();
        $namerand=rand(10000000, 99999999999). Carbon::now()->timestamp;
        // return response()->json(['message' => $namerand ]);
        // return response()->json(['message' => $request->data[1] ]);
        // return response()->json(['message' => $request->colnames[1] ]);
        return response()->json(['message' => $request->all() ]);
// $data=$request->all();
        $user = User::create([

            'name' =>$namerand,
            'email' => $namerand .'@schooleverything.com',
            'password' => Hash::make('@12345678'),
        ]);
        // return response()->json(['message' => $user ]);


            // id         : 2
            // school     : null
            // schoolgroup: null
                    //  schoolgroup_id
                    //  school_id     
                    //  stage         
                    //  className     
                    //  nameLong      

        if (Auth::check()) {
            $all         =Auth::user()             ;
            $id         =$user->id                 ;
            $school     =Auth::user()->school      ;
            $schoolgroup=Auth::user()->schoolgroup ;
        }else{return response()->json(['message' => 'error Auth' ]); }


    try {
        // foreach ($request->className as $value) {
            // `id`, `schoolgroup_id`, `school_id`,
            //  `teacher_id`, `namear`, `nameen`, `subjects`,
            //   `classes`, 
            //   `stage`, `notes1`,
            //  `notes2`, `notes3`, `created_at`, `updated_at`
            $create = new scschoolteacher;
            $create->teacher_id = $user->id;
            $create->school_id = $school;
            $create->schoolgroup_id = $schoolgroup;
            $create->namear = $request->data[1];
            $create->nameen = $request->data[2];
            $create->subjects = $request->data[3];
            $create->subjects = $request->data[4];
            $create->classes = $request->data[5];
            $create->createdby = $id;
            $create->save();
        //   }
          return response()->json(['message' => ' sucess   created' ]);
            }
        catch (\Throwable $th) {
            return response()->json(['message' => ' error - not   created']);
            }

}//create---------------------------------------------------------------------------
// createfromexcel
public function createfromexcel(Request $request)
    {
        // return response()->json(['message' =>'teacher']);

        // return response()->json(['message' =>$request->all()]);
        if (!Auth::check()){return response()->json(['message' => 'error Auth' ]); }
        // $userdata         =Auth::user()             ;
        // $school     =$userdata->school      ;
        // $schoolgroup=$userdata->schoolgroup ;

        // return response()->json(['message' => 'createfromexcel from laravel']);
        // return response()->json(['message' =>  $request->all() ]);
        // return response()->json(['message' =>  $request->all()[0] ]);
        // return response()->json(['message' =>  $request->all()[0]['Date'] ]);

        // return response()->json(['message' => array_keys(  $request->all()[0]) ]);
        // foreach ($request->all() as $key => $value) {
            //    return response()->json(['message' =>  $value[$headarray[1]]  ]);
            
            // }
            // return response()->json(['message' =>  $request->all()[0] ]);
            // $now = new DateTime();
            $headarray=array_keys(  $request->all()[0]);
            // return response()->json(['message' =>  $headarray ]);
            $datadb=$request->all();
        for ($i=0; $i <count($datadb) ; $i++) {
        //    $request->all()[$i]['id'];
        //    return response()->json(['message' =>  $datadb[$i][ $headarray[2]] ]);
        

        // return response()->json(['message' => $request->data[1] ]);
        // return response()->json(['message' => $request->colnames[1] ]);
        // $data=$request->all();
        // return response()->json(['message' => $request->all() ]);
        $namerand=rand(10000000, 99999999999). Carbon::now()->timestamp;
        $userdatatocreate=[

            'name'        =>$namerand,
            'email'       => $namerand .'@schooleverything.com',
            'password'    => Hash::make('@12345678'),
            'usertype'    =>'teacher',
            'schoolgroup_id' =>Auth::user()->schoolgroup_id,
            'school_id'      =>Auth::user()->school_id,
            'namear'         =>$datadb[$i][ $headarray[1]],
            'nameen'         =>$datadb[$i][ $headarray[2]],

        ];
        // return response()->json(['message' => '$userdatatocreate' ]);
        // return response()->json(['message' => $userdatatocreate ]);
    try {
         $user = User::create($userdatatocreate);
        //  return response()->json(['message' => $user ]);
            // $create = new scschoolteacher;
            // $create->teacher_id       =$user->id;
            // $create->schoolgroup_id   =Auth::user()->schoolgroup;
            // $create->school_id        =Auth::user()->school;
            // $create->namear           =$datadb[$i][ $headarray[1]];
            // $create->nameen           =$datadb[$i][ $headarray[2]];
            // $create->subjects         =$datadb[$i][ $headarray[3]];
            // $create->classes          =$datadb[$i][ $headarray[4]];
            // $create->stage            =$datadb[$i][ $headarray[5]];
            // $create->notes1           =$datadb[$i][ $headarray[6]];
            // $create->save();
    }
    catch (\Throwable $th) {
        return response()->json(['message' => ' error - not   created']);
    }
}
return response()->json(['message' => ' sucess   created '.count($datadb) ." teacher" ]);

}//createfromexcel---------------------------------------------------------------------------

public function updatefromexcel(Request $request)
    {
       
        
        if (!Auth::check()) {return response()->json(['message' => 'error Auth' ]); }
        $Authuser=Auth::user();
        $namerand=rand(10000000, 99999999999). Carbon::now()->timestamp;
        // return response()->json(['message' => Auth::check()]);
    $choosentitle=$request->choosentitle;
    foreach ($request->data as $key => $value) {
        try {
            $userdata               =[ 'name'           => $namerand                 ,
                'email'                 => $namerand .'@schooleverything.com'        ,
                'password'              => Hash::make('@12345678')                   ,
                'schoolgroup_id'        => $Authuser->schoolgroup_id                 ,
                'school_id'             => $Authuser->school_id                      ,
                // 'nid'                => $value['nid']                             ,
                'nameen'                => $value['nameen']                          ,
                'namear'                => $value['namear']                          ,
                'usertype'              => 'teacher'                          ];
                // return response()->json(['message' =>$userdata]);
            // return response()->json(['message' =>$value]);

            //  return response()->json(['message' =>$value[$choosentitle]]);
            //  return response()->json(['message' =>trim($value[$choosentitle])]);
            $findme = User::where($choosentitle,  trim($value[$choosentitle]))->get();
            return response()->json(['message' =>  count($findme)]);
            // $findme = User::where($choosentitle,  trim($value[$choosentitle].'j'))->get();
            // $findme = User::where($choosentitle, 'like', '%'.$value[$choosentitle].'%')->get();
            //  if($findme){return response()->json(['message' => $findme ]);}
     if(count($findme)<1){//not found create
                $user = User::create($userdata);
                return response()->json(['message' => 'not found' ]);}

     if(count($findme)>0){// found update
                $user =User::where('id', $findme->first()->id)->update($userdata);
                return response()->json(['message' =>  $findme->first()->id ]);}
                //  return response()->json(['message' => $findme ]);

    } catch (\Throwable $th) {
        //throw $th;
     return response()->json(['message' => $th ]);

    }
    };

        // return response()->json(['message' => $user ]);
        // `id`, `name`, `email`, `email_verified_at`, `password`, `usertype`,
        //  `schoolgroup_id`, `school_id`, `nid`, `nameen`, `namear`, `active`, 
        //  `createdby`, `notes1`, `notes2`, `notes3`,
    try {
        // foreach ($request->className as $value) {
            // `id`, `schoolgroup_id`, `school_id`,
            //  `teacher_id`, `namear`, `nameen`, `subjects`,
            //   `classes`, 
            //   `stage`, `notes1`,
            //  `notes2`, `notes3`, `created_at`, `updated_at`
            $create                 =new scschoolteacher         ;
            $create->teacher_id     =$findme     ->id            ;
            $create->school_id      =$Authuser   ->school_id     ;
            $create->schoolgroup_id =$Authuser   ->schoolgroup_id;
            $create->namear         =$request    ->data[1]       ;
            $create->nameen         =$request    ->data[2]       ;
            $create->subjects       =$request    ->data[3]       ;
            $create->subjects       =$request    ->data[4]       ;
            $create->classes        =$request    ->data[5]       ;
            $create->save();
        //   }
          return response()->json(['message' => ' sucess   created' ]);
            }
        catch (\Throwable $th) {
            return response()->json(['message' => ' error - not   created']);
            }

}//updatefromexcel---------------------------------------------------------------------------

public function updatefromexcel2(Request $request)
    {
        // $now = new DateTime();
        $namerand=rand(10000000, 99999999999). Carbon::now()->timestamp;
        // return response()->json(['message' => $namerand ]);
        // return response()->json(['message' => $request->data[1] ]);
        // return response()->json(['message' => $request->colnames[1] ]);
        return response()->json(['message' => $request->all() ]);
    // $data=$request->all();
        $user = User::create([

            'name' =>$namerand,
            'email' => $namerand .'@schooleverything.com',
            'password' => Hash::make('@12345678'),
        ]);
        // return response()->json(['message' => $user ]);


            // id         : 2
            // school     : null
            // schoolgroup: null
                    //  schoolgroup_id
                    //  school_id     
                    //  stage         
                    //  className     
                    //  nameLong      

        if (Auth::check()) {
            $all         =Auth::user()             ;
            $id         =$user->id                 ;
            $school     =Auth::user()->school      ;
            $schoolgroup=Auth::user()->schoolgroup ;
        }else{return response()->json(['message' => 'error Auth' ]); }


    try {
        // foreach ($request->className as $value) {
            // `id`, `schoolgroup_id`, `school_id`,
            //  `teacher_id`, `namear`, `nameen`, `subjects`,
            //   `classes`, 
            //   `stage`, `notes1`,
            //  `notes2`, `notes3`, `created_at`, `updated_at`
            $create = new scschoolteacher;
            $create->teacher_id = $user->id;
            $create->school_id = $school;
            $create->schoolgroup_id = $schoolgroup;
            $create->namear = $request->data[1];
            $create->nameen = $request->data[2];
            $create->subjects = $request->data[3];
            $create->subjects = $request->data[4];
            $create->classes = $request->data[5];
            $create->createdby = $id;
            $create->save();
        //   }
          return response()->json(['message' => ' sucess   created' ]);
            }
        catch (\Throwable $th) {
            return response()->json(['message' => ' error - not   created']);
            }

}//updatefromexcel---------------------------------------------------------------------------



public function createone(Request $request)
    {

    //    return response()->json(['message' => $request->classes ]);

        $namerand=rand(10000000, 99999999999). Carbon::now()->timestamp;
        // return response()->json(['message' => $namerand ]);
        // return response()->json(['message' => $request->data[1] ]);
        // return response()->json(['message' => $request->colnames[1] ]);
    // $data=$request->all();
        $user = User::create([

            'name' =>$namerand,
            'email' => $namerand .'@schooleverything.com',
            'password' => Hash::make('@12345678'),
        ]);
            // id         : 2
            // school     : null
            // schoolgroup: null
                    //  schoolgroup_id
                    //  school_id     
                    //  stage         
                    //  className     
                    //  nameLong      

        if (Auth::check()) {
            $all         =Auth::user()             ;
            $id         =Auth::user()->id          ;
            $school     =Auth::user()->school      ;
            $schoolgroup=Auth::user()->schoolgroup ;
        }else{return response()->json(['message' => 'error Auth' ]); }
             

    try {
        // foreach ($request->className as $value) {
            $create = new scschoolteacher;
            $create->school_id = $school;
            $create->schoolgroup_id = $schoolgroup;
            $create->teacher_id = $user->id;
            // $create->className = $value;
            $create->createdby = $id;
            $create->namear =$request->namear;
            $create->stage     = $request->stage;
            $create->subjects = $request->subjects;
            $create->classes  = implode(",", $request->classes);
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
            return response()->json(['message' => ' error - not   created:'.$th]);
            }  

               
}//createone




public function update(Request $request)
    {
    try {

        $update = scschoolteacher::findOrFail($request->id);
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
        $update = scschoolteacher::findOrFail($request->data[$i][0]);
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

        $update = scschoolteacher::findOrFail($request->id);
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
    scschoolteacher::find($request->id)->delete();

        return response()->json(['message' => 'success  deleted:'.$request->id]);
         }   
    catch (\Throwable $th) 
        {
        return response()->json(['message' => ' error deleted:'.$th]);      
        }

}//delete---------------------------------------------------------------------------

    }

