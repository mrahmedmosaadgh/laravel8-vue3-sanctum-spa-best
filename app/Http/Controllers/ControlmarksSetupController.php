<?php

namespace App\Http\Controllers;

use App\Models\controlmarks_setup;
use App\Models\Forqan_controlmarks_setup;
use Illuminate\Http\Request;

class ControlmarksSetupController extends Controller
{
    //
    public function controlmarkssetups(Request $request)
{


                            // SELECT `id`, `school_id`, `calender_id`, `name`, `year`, `date`, `input_start`, `input_end`, `display_start`, `display_end`, `sub_names`, `sub_max`, `sub_min`,
                            //  `created_at`, `updated_at` FROM `forqan_controlmarks_setups` WHERE 1;
$forqan_controlmarks_setups=Forqan_controlmarks_setup::all();

    return response()->json([
        'message' => 'controlmarkssetups success -----',
        'data' => $request->all(),
        'data2' => $forqan_controlmarks_setups,
        
                            ]);



}


}
