<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\ScmenuController;
use App\Http\Controllers\ScschoolclasseController;
use App\Http\Controllers\ScschoolclassteachersubjectController;
use App\Http\Controllers\ScschoolstudentController;
use App\Http\Controllers\ScschoolsubjectController;
use App\Http\Controllers\ScschoolteacherController;
use App\Http\Controllers\ScschooltermmarkmainController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VerificationController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('guest')->group(function () {
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/register', RegisterController::class);
    Route::post('/forgot-password', ForgotPasswordController::class);
    Route::post('/reset-password', ResetPasswordController::class);

    // guest verification (temporary auth)
    // Route::post('/verify-email/{id}/{hash}', [VerificationController::class, 'verify'])->name('verify');
    // Route::post('/verify-resend', [VerificationController::class, 'resend']);
});

Route::post('/verify-email/{id}/{hash}', [VerificationController::class, 'verify'])->name('verify');
Route::post('/verify-resend', [VerificationController::class, 'resend']);

Route::middleware('auth:sanctum')->group(function () {

    Route::post('/test', function() {
        return Auth::user();
    });



    Route::patch('/profile', ProfileController::class);
    Route::patch('/password', PasswordController::class);

    Route::post('/logout', [AuthController::class, 'logout']);

    // in app verification
    // Route::post('/verify-email/{id}/{hash}', [VerificationController::class, 'verify'])->name('verify');
    // Route::post('/verify-resend', [VerificationController::class, 'resend']);
});
Route::get('/user', UserController::class);
Route::get('/usertype', UserController::class);


Route::middleware('auth:sanctum')->group(function () {

Route::get('/usertypes', [UserController::class, 'usertypes']);
// --------roles---------------------------------------------Route::get('/menu', [ScmenuController::class, 'menu'])->name('menu');
Route::post('/rolesall'         , [UserController::class, 'rolesall'   ]);
Route::post('/rolenew'         , [UserController::class, 'rolenew'   ]);
Route::post('/roledel'         , [UserController::class, 'roledel'   ]);
Route::post('/roleupdate'         , [UserController::class, 'roleupdate'   ]);
Route::post('/permission_role'         , [UserController::class, 'permission_role'   ]);
Route::post('/permission_role_update'         , [UserController::class, 'permission_role_update'   ]);

// --------roles---------------------------------------------Route::get('/menu', [ScmenuController::class, 'menu'])->name('menu');
// --------permissions---------------------------------------------Route::get('/menu', [ScmenuController::class, 'menu'])->name('menu');
Route::post('/permissionsall'         , [UserController::class, 'permissionsall'   ]);
Route::post('/permissionnew'         , [UserController::class, 'permissionnew'   ]);
Route::post('/permissiondel'         , [UserController::class, 'permissiondel'   ]);
Route::post('/permissionupdate'         , [UserController::class, 'permissionupdate'   ]);

// --------permissions---------------------------------------------

// --------marks---------------------------------------------Route::get('/menu', [ScmenuController::class, 'menu'])->name('menu');
// Route::post('/sct/savesct'         , [ScschoolclassteachersubjectController::class, 'savesct'   ]);
// Route::post('/classSujects/test'         , [ScschoolclassteachersubjectController::class, 'test'   ]);
// Route::post('/classSujects/loadmix'         , [ScschoolclassteachersubjectController::class, 'loadmix'   ]);
// Route::post('/classSujects/updateteachers'         , [ScschoolclassteachersubjectController::class, 'updateteachers'   ]);
// Route::post('/classSujects/insert'         , [ScschoolclassteachersubjectController::class, 'insert'   ]);

Route::post('/classSujects/loadmix2'         , [ScschoolclassteachersubjectController::class, 'loadmix2'   ]);



Route::post('/marks/all'         , [ScschooltermmarkmainController::class, 'all'   ]);
Route::post('/marks/update'         , [ScschooltermmarkmainController::class, 'update'   ]);
// --------mix-------------------------------------------------
Route::get('/menuget', [ScmenuController::class, 'menuget'])->name('menu1');
Route::post('/menupost', [ScmenuController::class, 'menupost'])->name('menu');
Route::post('/menu', [ScmenuController::class, 'createmenuitem']);
Route::post('/menuupdate', [ScmenuController::class, 'menuupdate']);
Route::post('/menudelete', [ScmenuController::class, 'menudelete']);

// --------mix----sct/savesct---------------------------------------------Route::get('/menu', [ScmenuController::class, 'menu'])->name('menu');
Route::post('/sct/savesct'         , [ScschoolclassteachersubjectController::class, 'savesct'   ]);
Route::post('/classSujects/test'         , [ScschoolclassteachersubjectController::class, 'test'   ]);
Route::post('/classSujects/loadmix'         , [ScschoolclassteachersubjectController::class, 'loadmix'   ]);
Route::post('/classSujects/updateteachers'         , [ScschoolclassteachersubjectController::class, 'updateteachers'   ]);
Route::post('/classSujects/insert'         , [ScschoolclassteachersubjectController::class, 'insert'   ]);
Route::post('/subject/all'         , [ScschoolsubjectController::class, 'all'   ]);
// --------class-------------------------------------------------Route::get('/menu', [ScmenuController::class, 'menu'])->name('menu');
Route::post('/class/all'         , [ScschoolclasseController::class, 'all'   ]);
Route::post('/class/create'      , [ScschoolclasseController::class, 'create']);
Route::post('/class/createone'   , [ScschoolclasseController::class, 'createone']);
Route::post('/class/updatecolval', [ScschoolclasseController::class, 'updatecolval']);
Route::post('/class/update'      , [ScschoolclasseController::class, 'update']);
Route::post('/class/updateall'   , [ScschoolclasseController::class, 'updateall']);
Route::post('/class/delete'      , [ScschoolclasseController::class, 'delete']);

// --------class-------------------------------------------------
Route::post('/users'         , [UserController::class, 'usersload'   ]);
// --------teacher-------------------------------------------------
Route::post('/teacher/all'         , [ScschoolteacherController::class, 'all'   ]);
Route::post('/teacher/create'      , [ScschoolteacherController::class, 'create']);
Route::post('/teacher/createone'   , [ScschoolteacherController::class, 'createone']);
Route::post('/teacher/createfromexcel'   , [ScschoolteacherController::class, 'createfromexcel']);
Route::post('/teacher/updatefromexcel'   , [ScschoolteacherController::class, 'updatefromexcel']);

Route::post('/teacher/updatecolval', [ScschoolteacherController::class, 'updatecolval']);
Route::post('/teacher/update'      , [ScschoolteacherController::class, 'update']);
Route::post('/teacher/updateall'   , [ScschoolteacherController::class, 'updateall']);
Route::post('/teacher/delete'      , [ScschoolteacherController::class, 'delete']);

// --------teacher-------------------------------------------------
// --------student-------------------------------------------------
Route::post('/student/all'         , [ScschoolstudentController::class, 'all'   ]);
Route::post('/student/create'      , [ScschoolstudentController::class, 'create']);
Route::post('/student/createone'   , [ScschoolstudentController::class, 'createone']);
Route::post('/student/createfromexcel'   , [ScschoolstudentController::class, 'createfromexcel']);


// --------student-------------------------------------------------
});