<?php

namespace App\Http\Controllers;

use App\Models\Savecode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\Isset_;

class SavecodeController extends Controller
{
    //
    public function savecode(Request $request)
    {
        if($request->method=='get'){
            try {

                return response()->json(Savecode::all());
            } catch (\Throwable $th) {
                return response()->json([
                    'message' => '  error data:'.$th
                ]);
                
            }
        }
        if($request->method=='find'){
            try {


                // $str = "Apple is healthy.";
                // $delimiter = ' ';
                // $words = explode($delimiter, $str);
                 
                // foreach ($words as $word) {
                //     echo $word;
                //     echo "<br>";
                // }

                $str = $request->txt;
                $delimiter = ' ';
                $words = explode($delimiter, $str);
                 $qu='';
                foreach ($words as $word) {
                 $qu=$qu &   "->orWhere('name','LIKE', '%{$word}%')";

                }
                if (isset($words[0])) {
                    $txt0=$words[0];
                } else {
                    $txt0='';
                }

                if (isset($words[1])) {
                    $txt1=$words[1];
                } else {
                    $txt1='';
                }

                if (isset($words[2])) {
                    $txt2=$words[2];
                } else {
                    $txt2='';
                }



                // $names = Input::get('name');
                // $query = DB::table('table');
                // foreach($names as $name){
                //    $query->orWhere('id', $name);
                // }
                // $result = $query->get();
                $str = $request->txt;
                $delimiter = ' ';
                $words = explode($delimiter, $str);

                $names = $words;
                $query = DB::table('savecodes')
                ->where('name','LIKE', "%{$request->txt}%")
                ->orWhere('b1n','LIKE', "%{$request->txt}%")
                ->orWhere('b2n','LIKE', "%{$request->txt}%")
                ->orWhere('b3n','LIKE', "%{$request->txt}%")
                ->orWhere('b4n','LIKE', "%{$request->txt}%")
                ->orWhere('b5n','LIKE', "%{$request->txt}%")
                ;
                foreach($names as $name){
                   $query->orWhere('name','LIKE', "%{$name}%");
                }
                $result = $query->get();
return response()->json($result);

                // return response()->json("method=='find'");
                return response()->json(Savecode::
                where('name','LIKE', "%{$request->txt}%")
            ->orWhere('name','LIKE', "%{$txt0}%")
            ->orWhere('name','LIKE', "%{$txt1}%")
            ->orWhere('name','LIKE', "%{$txt2}%")
            ->orWhere('b1n','LIKE', "%{$request->txt}%")
            ->orWhere('b2n','LIKE', "%{$request->txt}%")
            ->orWhere('b3n','LIKE', "%{$request->txt}%")
            ->orWhere('b4n','LIKE', "%{$request->txt}%")
            ->orWhere('b5n','LIKE', "%{$request->txt}%")
            ->get()

            );

            } catch (\Throwable $th) {
                return response()->json([
                    'message' => '  error find:'.$th
                ]);

            }
        }
        // ------------------------------------------------------
        if($request->method=='update'){
            try {
                if(!isset($request->data['name' ])){
                   return response()->json([
                       'message' => '  error data:$request->data[name ] not found',
                       'data' =>  $request->data
                   ]); 
                }
                // $matchit=[
                //     'id'  => $request->data['id' ],

                // ];
                       $input = [

                           'name'  => $request->data['name' ],
                           'b1n'   => $request->data['b1n'  ],
                           'b1'    => $request->data['b1'   ],
                           'b2n'   => $request->data['b2n'  ],
                           'b2'    => $request->data['b2'   ],
                           'b3n'   => $request->data['b3n'  ],
                           'b3'    => $request->data['b3'   ],
                           'b4n'   => $request->data['b4n'  ],
                           'b4'    => $request->data['b4'   ],
                           'b5n'   => $request->data['b5n'  ],
                           'b5'    => $request->data['b5'   ],
                           'notes' => $request->data['notes'],
               
                       ];
               
                       Savecode::where('id',$request->data['id'])->update($input);
                        //    $Savecode = Savecode::create($input);
                           return response()->json($request->all());
                           // return response()->json(Savecode::all());
                       } catch (\Throwable $th) {
                           return response()->json([
                               'message' => '  error update:'.$th
                           ]);
                           
                       }
        }

        // ------------------------------------------------------
        if($request->method=='dalete'){
            try {
                if(!isset($request->data['name' ])){
                   return response()->json([
                       'message' => '  error dalete:$request->data[name ] not found',
                       'data' =>  $request->data
                   ]); 
                }

                       Savecode::where('id',$request->data['id'])->delete();
                        //    $Savecode = Savecode::create($input);
                           return response()->json($request->all());
                           // return response()->json(Savecode::all());
                       } catch (\Throwable $th) {
                           return response()->json([
                               'message' => '  error update:'.$th
                           ]);
                           
                       }
        }
        
        try {
 if(!isset($request->data['name' ])){
    return response()->json([
        'message' => '  error data:$request->data[name ] not found',
        'data' =>  $request->data
    ]); 
 }
        $input = [
            'name'  => $request->data['name' ],
            'b1n'   => $request->data['b1n'  ],
            'b1'    => $request->data['b1'   ],
            'b2n'   => $request->data['b2n'  ],
            'b2'    => $request->data['b2'   ],
            'b3n'   => $request->data['b3n'  ],
            'b3'    => $request->data['b3'   ],
            'b4n'   => $request->data['b4n'  ],
            'b4'    => $request->data['b4'   ],
            'b5n'   => $request->data['b5n'  ],
            'b5'    => $request->data['b5'   ],
            'notes' => $request->data['notes'],

        ];

        
            $Savecode = Savecode::create($input);
            return response()->json($request->all());
            // return response()->json(Savecode::all());
        } catch (\Throwable $th) {
            return response()->json([
                'message' => '  error create:'.$th
            ]);
            
        }

    }
}
