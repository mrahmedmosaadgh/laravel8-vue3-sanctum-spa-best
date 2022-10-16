<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ControlmarkController;
use App\Http\Controllers\ControlmarksSetupController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\MarksMarkController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\SavecodeController;
use App\Http\Controllers\ScmenuController;
use App\Http\Controllers\ScschoolcalenderController;
use App\Http\Controllers\ScschoolclasseController;
use App\Http\Controllers\ScschoolclassteachersubjectController;
use App\Http\Controllers\ScschoolParticipationController;
use App\Http\Controllers\ScschoolQuizSAController;
use App\Http\Controllers\ScschoolscheduleController;
use App\Http\Controllers\ScschoolstudentattenddenceController;
use App\Http\Controllers\ScschoolstudentController;
use App\Http\Controllers\ScschoolstudentHomeController;
use App\Http\Controllers\ScschoolsubjectController;
use App\Http\Controllers\ScschoolteacherController;
use App\Http\Controllers\ScschoolteachertasksController;
use App\Http\Controllers\ScschooltermmarkmainController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VerificationController;
// use App\Models\MarksMark;
// use Illuminate\Support\Facades\Auth;
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

Route::get('items',['as'=>'items.index','uses'=>'ItemController@index']);

Route::post('items/create',['as'=>'items.store','uses'=>'ItemController@store']);

Route::get('items/edit/{id}',['as'=>'items.edit','uses'=>'ItemController@edit']);

Route::patch('items/{id}',['as'=>'items.update','uses'=>'ItemController@update']);

Route::delete('items/{id}',['as'=>'items.destroy','uses'=>'ItemController@destroy']);

Route::get('items/{id}',['as'=>'items.view','uses'=>'ItemController@view']);




Resource Route:

Route::resource('items', 'ItemController');
php artisan route:list

 POST      		 api/admin/calender                       	 calender.store   	 App\Http\Controllers\ScschoolcalenderController@store                            
 GET	HEAD  	 api/admin/calender                       	 calender.index   	 App\Http\Controllers\ScschoolcalenderController@index                            
 GET	HEAD  	 api/admin/calender/create                	 calender.create  	 App\Http\Controllers\ScschoolcalenderController@create                           
 DELETE    		 api/admin/calender/{calender}            	 calender.destroy 	 App\Http\Controllers\ScschoolcalenderController@destroy                          
 PUT	PATCH 	 api/admin/calender/{calender}            	 calender.update  	 App\Http\Controllers\ScschoolcalenderController@update                           
 GET	HEAD  	 api/admin/calender/{calender}            	 calender.show    	 App\Http\Controllers\ScschoolcalenderController@show                             
 GET	HEAD  	 api/admin/calender/{calender}/edit       	 calender.edit    	 App\Http\Controllers\ScschoolcalenderController@edit                             









*/
// -------marks forqan------------------------------------------------------------------------------------------------------------------------
// get_MarksSetup
            Route::post('/forqan/controlmarkssetups', [ControlmarksSetupController::class, 'controlmarkssetups']);
            Route::post('/savecode', [SavecodeController::class, 'savecode']);




// -------marks------------------------------------------------------------------------------------------------------------------------

            
            Route::post('/marks/marks_search', [MarksMarkController::class, 'marks_search']);
            Route::post('/marks/marks_xls_to_db', [MarksMarkController::class, 'marks_xls_to_db']);
            Route::post('/marks/get_MarksSetup', [MarksMarkController::class, 'get_MarksSetup']);
            Route::post('/marks/get_MarksSetup_search', [MarksMarkController::class, 'get_MarksSetup_search']);
            Route::post('/marks/new_MarksSetup', [MarksMarkController::class, 'new_MarksSetup']);
            Route::post('/marks/update_MarksSetup', [MarksMarkController::class, 'update_MarksSetup']);
            Route::post('/marks/del_MarksSetup', [MarksMarkController::class, 'del_MarksSetup']);
            Route::post('/marks/marks_register', [MarksMarkController::class, 'marks_register']);
            Route::post('/marks/marks_profile', [MarksMarkController::class, 'marks_profile']);
            Route::post('/marks/storeImage', [MarksMarkController::class, 'storeImage']);
            Route::post('/marks/upladavatar', [MarksMarkController::class, 'upladavatar']);
            // Route::post('/marks/marks_register', RegisterController::class);storeImage

// -------marks------------------------------------------------------------------------------------------------------------------------
// -------guest------------------------------------------------------------------------------------------------------------------------

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
            Route::patch('/profile', ProfileController::class);
            Route::patch('/password', PasswordController::class);
            Route::post('/logout', [AuthController::class, 'logout']);

            // in app verification
            // Route::post('/verify-email/{id}/{hash}', [VerificationController::class, 'verify'])->name('verify');
            // Route::post('/verify-resend', [VerificationController::class, 'resend']);
        });

        Route::get('/user', UserController::class);
        Route::get('/usertype', UserController::class);
// -------guest------------------------------------------------------------------------------------------------------------------------

Route::middleware('auth:sanctum')->prefix('admin')->group(function () {

    Route::resource('scschoolcalenders', ScschoolcalenderController::class);//scschoolcalenders plural 
    Route::post('showtermcalender', [ScschoolcalenderController::class,'showtermcalender']);
});

// -------teacher--prefix('teacher')----------------------------------------------------------------------------------------------------------------------
Route::middleware('auth:sanctum')->prefix('teacher')->group(function () {

                Route::post('teacher_get_classes_students', [ScschoolteachertasksController::class, 'teacher_get_classes_students']);
                Route::post('get_class_students', [ScschoolteachertasksController::class, 'get_class_students']);
                Route::post('schedule', [ScschoolscheduleController::class, 'schedule']);
                Route::post('schedule2', [ScschoolscheduleController::class, 'schedule2']);
                Route::post('schedule3', [ScschoolscheduleController::class, 'schedule3']);

                Route::post('scheduleupdate', [ScschoolscheduleController::class, 'scheduleupdate']);
                Route::post('createattendance', [ScschoolstudentattenddenceController::class, 'createattendance']);
                Route::post('saveattendance', [ScschoolstudentattenddenceController::class, 'saveattendance']);
                Route::post('participation', [ScschoolParticipationController::class, 'participation']);
                Route::post('get_participation_plus_marks', [ScschoolParticipationController::class, 'get_participation_plus_marks']);
                Route::post('get_quizzes', [ScschoolQuizSAController::class, 'get_quizzes']);
                Route::post('getquizzes', [ScschoolQuizSAController::class, 'getquizzes']);
                Route::post('get_weekly_c_recs', [ScschoolParticipationController::class, 'get_weekly_c_recs']);
                Route::post('datacontrolmarks', [ControlmarkController::class, 'datacontrolmarks']);
                

});
            // -------teacher------------------------------------------------------------------------------------------------------------------------
            // -------student------------------------------------------------------------------------------------------------------------------------
            
Route::middleware('auth:sanctum')->prefix('student')->group(function () {
    Route::post('get_lastlogin', [ScschoolstudentHomeController::class, 'get_lastlogin']);
    Route::post('lastlogin', [ScschoolstudentHomeController::class, 'lastlogin']);
    Route::post('lastonline', [ScschoolstudentHomeController::class, 'lastonline']);
    Route::post('studentData', [ScschoolstudentHomeController::class, 'studentData']);
    Route::post('get_quizzes', [ScschoolstudentHomeController::class, 'get_quizzes']);

});
            
            // -------student------------------------------------------------------------------------------------------------------------------------

Route::middleware('auth:sanctum')->group(function () {
                Route::post('/userdata'         , [UserController::class, 'userdata'   ]);
                Route::post('/lang'         , [UserController::class, 'lang'   ]);

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


            Route::post('/teacher/createfromexcelforqan'   , [ScschoolteacherController::class, 'createfromexcelforqan']);
            Route::post('/teacher/createstudentsfromexcelforqan'   , [ScschoolteacherController::class, 'createstudentsfromexcelforqan']);
            Route::post('/teacher/getclassstudentsforqan'   , [ScschoolteacherController::class, 'getclassstudentsforqan']);

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