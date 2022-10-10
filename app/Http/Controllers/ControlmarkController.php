<?php

namespace App\Http\Controllers;

use App\Models\scschoolclassteachersubject;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ControlmarkController extends Controller
{

// insert teachers from xls`
public function insert_teachers_to_db(Request $request)
{
    return response()->json([
        'message' => 'insert_teachers_to_db success -----',
        'data' => $request,
        // 'data' =>$request->data['round'],
        // 'data' => $lastRound,
]);
    $data = $request->validate([
        'name' => 'required|min:3|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6|max:255|confirmed'
    ]);
    // name	email	password	nameen	classname
// 

    $user = User::create([
        'name' => $data['name'],
        'nameen' => $data['nameen'],
        'classname' => $data['classname'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
    ]);
    if ($user) {
        event(new Registered($user));
        $token = $user->createToken('access_token')->plainTextToken;
        return response()->json(["token" => $token , "type" => "Bearer"]);
    }
}
// --------------------------------------------




    //
    public function datacontrolmarks(Request $request)
    {
try {
    //code...
    // scschoolclassteachersubject
        $teacher= scschoolclassteachersubject::where("teacher_id",Auth::user()->id  )
        ->with('myclasses')
->with('mysubjects')
->with('myteachers')
->with('mystudents')
->with('myschedules')
->with('mycontrolmarks')

        // $teacher= User::where("id",Auth::user()->id  )
        // ->with('tcs')
        ->get();
        return response()->json([
            "data" => $teacher,
            "user" => Auth::user()->id,
            "msg" => "datacontrolmarks",
        ], 200);


    } catch (\Exception $e) {
    // } catch (\Throwable $th) {
        return response()->json([
            "data" => $e,
            // "data" => $th,
            "msg" => "datacontrolmarks  error",
        ], 200);
    }
        
    }
}
