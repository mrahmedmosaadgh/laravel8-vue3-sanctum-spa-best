<?php

namespace App\Http\Controllers;

use App\Models\MarksMark;
use App\Models\MarksSetup;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

// use PhpParser\Node\Stmt\TryCatch;

class MarksMarkController extends Controller
{




        // $request->validate([
        //     "screenshot" => [
        //         'required', 'file',
        //         'mimes:png',
        //         // max file size in kB
        //         'max:1024',
        //         // for images, specify dimension constraints
        //         // https://laravel.com/docs/9.x/validation#rule-dimensions
        //         'dimensions:min_width=500,max_width=1500'
        //         ]
        // ]);
        // return response()->json([

        //     'file1' => $request->file('image'),
        //     'file2' => $request->file('file'),
        //     'message' => $request->all()
        // ], 200);
//Store image
public function upladavatar(Request $request){
    $file    = $request->file('image');
    $filename= auth()->user()->id.".jpg";
    $fullpath=public_path('marks/avatar/'.$filename);

    if($file){

            try {
                    $request->validate(["image" => [ 'max:3024'] ]);
                                if(File::exists($fullpath)){File::delete($fullpath);}
                                $file-> move(public_path('marks/avatar'), $filename);

                    return response()->json(['message' =>'image  uploaded success '], 200);

                } catch (\Throwable $th) {
                    return response()->json(['message' => 'image  more than 3 mb','error' => $th]);
                }


        }
    }


public function storeImage(Request $request){
    $file    = $request->file('image');
    $filename= auth()->user()->id.".jpg";
    $fullpath=public_path('marks/logo/'.$filename);

    if($file){

            try {
                    $request->validate(["image" => [ 'max:3024'] ]);
                                if(File::exists($fullpath)){File::delete($fullpath);}
                                $file-> move(public_path('marks/logo'), $filename);

                    return response()->json(['message' =>'image  uploaded success '], 200);

                } catch (\Throwable $th) {
                    return response()->json(['message' => 'image  more than 3 mb','error' => $th]);
                }


        }
    }




public function marks_profile(Request $request)
    {
        $user = $request->user();
        // return response()->json([
        //     'user' => $request->only('name', 'email','notes'),
        //     'message' => 'profile marks_profile .'
        // ], 200);
        // $this->authorize('users-read');
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $user->id
        ]);
        $user->update($request->only('name', 'email','notes'));
        // $user->update($request->only('name', 'email'));

        return response()->json([
            'user' => $user,
            'data' => json_decode($user->notes, true),

            'message' => 'marks_profile updated successfully .'
        ], 200);
    }

    public function marks_register(Request $request)
    {

        try {
            $data = $request->validate([
                'name' => 'required|min:3|max:255',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:6|max:255|confirmed'
            ]);
            $user = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'school_id'=> 1,
                'project_name'=> 'marks',

                'password' => Hash::make($data['password']),
            ]);
            if ($user) {
                event(new Registered($user));
                $token = $user->createToken('access_token')->plainTextToken;
                return response()->json(["token" => $token , "type" => "Bearer"]);
            }
        
        
        
            return response()->json([
                'message' => 'success',
                'data' => $request->all(),
            ]);
        
        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'error',
                'data' => $th,
            ]);
        }

        $data = $request->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|max:255|confirmed'
        ]);


        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        if ($user) {
            event(new Registered($user));
            $token = $user->createToken('access_token')->plainTextToken;
            return response()->json(["token" => $token , "type" => "Bearer"]);
        }
    }



        public function marks_search(Request $request)
    {
        // return response()->json(['message' => 'marks_search from api','data' => $request->txt]);
        $Marks= MarksMark::all()
        ->where('school_id',1)
                ->where('marks_setup_id',1)
        ->where('student_id',$request->txt)->first();

        $t_head1= MarksSetup::all()
        ->where('school_id',1)
                ->where('id',1)->first();



      $data=[
        'Marks'=>$Marks,
        // 't_head1'=>$t_head1['keys_array']
        't_head1'=>json_decode($t_head1->keys_array, true),
        't_head2'=>json_decode($t_head1->names_array, true),

        // 't_head1'=>$t_head1[0]->keys_array
        // $explode_id = json_decode($request->data, true);
      ];
        return response()->json(['message' => 'get_Marks from api','data'=> $data]);

    }

        public function del_MarksSetup(Request $request)
    {
        // return response()->json(['message' => 'del_MarksSetup from api','data' => $request->all()]);
        try {
            MarksSetup::find($request->id)->delete();
            $Marksetup= MarksSetup::all()->where('school_id',1);
            // return response()->json(['message' => 'new_MarksSetup from api success','data'=> $data]);
                return response()->json(['message' => 'new_MarksSetup from api success','data'=> $Marksetup]);
            // return response()->json(['message' => 'success  deleted:'.$request->id]);
             }
        catch (\Throwable $th) 
            {
            return response()->json(['message' => ' error deleted:'.$th]);      
            }
    }

    //     public function update_MarksSetup(Request $request)
    // {
    //     return response()->json(['message' => 'update_MarksSetup from api','data' => $request->all()]);



    // }

        public function new_MarksSetup(Request $request)
    {
        // return response()->json(['message' => 'new_MarksSetup from api','data'=> $request->all()['name' ]]);
        $data=[
            'school_id' =>1,
            'name' =>$request->all()['name' ],
            'term' =>$request->all()['term' ],
            'year' =>$request->all()['year' ],
            'lang' =>$request->all()['lang' ],
            'notes'=>$request->all()['notes']
        ];
       try {
        //code...

        // $MarksSetupnew = MarksSetup::insert();
        // $values = array('id' => 1,'name' => 'Dayle');
        DB::table('marks_setups')->insert($data);
        $Marksetup= MarksSetup::all()->where('school_id',1);
        // return response()->json(['message' => 'new_MarksSetup from api success','data'=> $data]);
            return response()->json(['message' => 'new_MarksSetup from api success','data'=> $Marksetup]);
        } catch (\Throwable $th) {
            return response()->json(['error'=>$th,'message' => 'new_MarksSetup from api error','data'=> $Marksetup]);
        }
    }

        public function get_MarksSetup(Request $request)
    {
        // return response()->json(['message' => 'get_MarksSetup from api']);
        $Marksetup= MarksSetup::all()->where('school_id',1);
        return response()->json(['message' => 'get_MarksSetup from api','data'=> $Marksetup]);

    }
    public function get_MarksSetup_search(Request $request)
    {
        // return response()->json(['message' => 'get_MarksSetup from api']);
        $Marksetup_search= MarksSetup::all()
        ->where('id',$request->MarksSetup_id)->first();
        // ->where('school_id',1)
        return response()->json(['message' => 'get_MarksSetup from api','data'=> $Marksetup_search]);

    }

    public function marks_xls_to_db(Request $request)
    {
        // return response()->json(['message' => 'marks_xls_to_db from api','data' =>$request->id]);

         $school_id=1;
         $marks_setup_id=$request->id;
            //    $foundbefore= MarksMark::where('school_id',$school_id)
            //     ->where('marks_setup_id',$marks_setup_id)
            //     ->where('student_id',$request->all()[3]['student_id'])
            //     ->get();
                $array_keys=array_keys($request->data[0]);


        $matchThese1 = [

            'school_id'     =>$school_id                      ,
            'id'=>$marks_setup_id                 ,

            ];

                    $MarksSetup_data=[
                                'school_id'            =>$school_id   ,
                                'name'                =>''   ,
                                'term'                =>$request->data[1]['classroom'],
                                'year'                =>date("Y")   ,
                                'search_field'        =>'student_id'   ,
                                'names_array'         =>array_values($request->data[0])   ,
                                'max_array'           =>array_values($request->data[1])   ,
                                'min_array'           =>array_values($request->data[2])   ,
                                'keys_array'          =>$array_keys,
                                'grade'               =>$request->data[1]['student_name'],
                                'lang'                =>$request->data[1]['type']   ,

                                'notes'               =>$school_id   ,
                    ];

            // array_values($request->data[0]);
            //             return response()->json([
            //                 'name' => $MarksSetup_data,
            // 'name2' => $request->data[0],
                        
            //             ]);



           try {
                                MarksSetup::updateOrCreate($matchThese1,$MarksSetup_data);


           } catch (\Throwable $th) {
               return response()->json([
                   'message' => 'error',
                   'data' => $th,
               ]);
           }


         $data_Marks=[
            'school_id'     =>$school_id,
            'marks_setup_id'=>$marks_setup_id,
            'student_id'    =>'',
            'student_name'  =>'',
             'classroom'    =>'',
            'type'          =>'',
            'sub1'          =>'',
            'sub2'          =>'',
            'sub3'          =>'',
            'sub4'          =>'',
            'sub5'          =>'',
            'sub6'          =>'',
            'sub7'          =>'',
            'sub8'          =>'',
            'sub9'          =>'',
            'sub10'         =>'',
            'sub11'         =>'',
            'sub12'         =>'',
            'sub13'         =>'',
            'sub14'         =>'',
            'sub15'         =>'',
            'sub16'         =>'',
            'sub17'         =>'',
            'sub18'         =>'',
            'sub19'         =>'',
            'sub20'         =>'',
            'total'         =>'',
            'total2'        =>'',
            // 'active'        =>1,
            'msg'           =>'',
            // 'seencounter'   =>'',
            'notes'         =>'',
            'username'      =>'',
            'password'      =>'',
            'created_at'    =>date(now()),
         ];
        for ($i=3; $i <count($request->data) ; $i++) {

            // $MarksMark = new MarksMark;
            for ($t = 0; $t < count($array_keys); $t++) {
                $indexdata = $array_keys[$t];
                if (!isset($request->data[$i][$indexdata])) {
                    // $MarksMark->$indexdata = '';

                    $data_Marks[$indexdata] = '';
                } else {
                    $data_Marks[$indexdata] = $request->data[$i][$indexdata];
                    // $MarksMark->$indexdata = $request->data[$i][$indexdata];
                }
            }


                $matchThese = [

                'school_id'     =>$school_id                      ,
                'marks_setup_id'=>$marks_setup_id                 ,
                'student_id'    =>$request->data[$i]['student_id'],
                ];

            try {
                    MarksMark::updateOrCreate($matchThese,$data_Marks);
                    // $MarksMark->save();
                    // MarksSetup::insert($data_MarksSetup);
                    //    $MarksMark= MarksMark::insert($data_Marks);
                // MarksMark::create($data_Marks);

                    } catch (\Throwable $th) {

                        // MarksMark::where('school_id',$school_id)->where('marks_setup_id',$marks_setup_id)->delete;
                    return response()->json([
                        'message' => 'error',
                        'data' => $th,
                    ]);
                                            }




                }


                return response()->json([
                    'message' => 'success',
                    'data' => $request->data,
                ]);







        // MarksMark::create($inputs);
    }
    public function marks_xls_to_db_old(Request $request)
    {
         $school_id=1;
         $marks_setup_id=$request->id;
            //    $foundbefore= MarksMark::where('school_id',$school_id)
            //     ->where('marks_setup_id',$marks_setup_id)
            //     ->where('student_id',$request->all()[3]['student_id'])
            //     ->get();
                $array_keys=array_keys($request->all()[0]);


        $matchThese1 = [

            'school_id'     =>$school_id                      ,
            'id'=>$marks_setup_id                 ,

            ];

                    $MarksSetup_data=[
                                'school_id'            =>$school_id   ,
                                'name'                =>''   ,
                                'term'                =>$request->all()[1]['classroom'],
                                'year'                =>date("Y")   ,
                                'search_field'        =>'student_id'   ,
                                'names_array'         =>array_values($request->all()[0])   ,
                                'max_array'           =>array_values($request->all()[1])   ,
                                'min_array'           =>array_values($request->all()[2])   ,
                                'keys_array'          =>$array_keys,
                                'grade'               =>$request->all()[1]['student_name'],
                                'lang'                =>$request->all()[1]['type']   ,

                                'notes'               =>$school_id   ,
                    ];

            // array_values($request->all()[0]);
            //             return response()->json([
            //                 'name' => $MarksSetup_data,
            // 'name2' => $request->all()[0],
                        
            //             ]);



           try {
                                MarksSetup::updateOrCreate($matchThese1,$MarksSetup_data);


           } catch (\Throwable $th) {
               return response()->json([
                   'message' => 'error',
                   'data' => $th,
               ]);
           }


         $data_Marks=[
            'school_id'     =>$school_id,
            'marks_setup_id'=>$marks_setup_id,
            'student_id'    =>'',
            'student_name'  =>'',
             'classroom'    =>'',
            'type'          =>'',
            'sub1'          =>'',
            'sub2'          =>'',
            'sub3'          =>'',
            'sub4'          =>'',
            'sub5'          =>'',
            'sub6'          =>'',
            'sub7'          =>'',
            'sub8'          =>'',
            'sub9'          =>'',
            'sub10'         =>'',
            'sub11'         =>'',
            'sub12'         =>'',
            'sub13'         =>'',
            'sub14'         =>'',
            'sub15'         =>'',
            'sub16'         =>'',
            'sub17'         =>'',
            'sub18'         =>'',
            'sub19'         =>'',
            'sub20'         =>'',
            'total'         =>'',
            'total2'        =>'',
            // 'active'        =>1,
            'msg'           =>'',
            // 'seencounter'   =>'',
            'notes'         =>'',
            'username'      =>'',
            'password'      =>'',
            'created_at'    =>date(now()),
         ];
        for ($i=3; $i <count($request->all()) ; $i++) {

            // $MarksMark = new MarksMark;
            for ($t = 0; $t < count($array_keys); $t++) {
                $indexdata = $array_keys[$t];
                if (!isset($request->all()[$i][$indexdata])) {
                    // $MarksMark->$indexdata = '';

                    $data_Marks[$indexdata] = '';
                } else {
                    $data_Marks[$indexdata] = $request->all()[$i][$indexdata];
                    // $MarksMark->$indexdata = $request->all()[$i][$indexdata];
                }
            }


                $matchThese = [

                'school_id'     =>$school_id                      ,
                'marks_setup_id'=>$marks_setup_id                 ,
                'student_id'    =>$request->all()[$i]['student_id'],
                ];

            try {
                    MarksMark::updateOrCreate($matchThese,$data_Marks);
                    // $MarksMark->save();
                    // MarksSetup::insert($data_MarksSetup);
                    //    $MarksMark= MarksMark::insert($data_Marks);
                // MarksMark::create($data_Marks);

                    } catch (\Throwable $th) {

                        // MarksMark::where('school_id',$school_id)->where('marks_setup_id',$marks_setup_id)->delete;
                    return response()->json([
                        'message' => 'error',
                        'data' => $th,
                    ]);
                                            }




                }


                return response()->json([
                    'message' => 'success',
                    'data' => $request->all(),
                ]);







        // MarksMark::create($inputs);
    }
}
