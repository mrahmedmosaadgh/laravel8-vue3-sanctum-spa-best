<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class scschoolclass extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function userdata()
    {
        return $this->belongsTo(user::class);
    }
}
