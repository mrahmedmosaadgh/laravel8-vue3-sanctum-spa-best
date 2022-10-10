<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class scschoolteacher extends Model
{
    use HasFactory;
    protected $guarded = [];

    
    public function userdata()
    {
        return $this->belongsTo(user::class);
    }
    // $post = Detail::find(1)->post
    // $userdata = scschoolteacher::find(1)->userdata
}
