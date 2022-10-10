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
    public function myteachers()
    {
        // return $this->belongsToMany('App\Models\user','scschoolclassteachersubject');
        return $this->belongsToMany('App\Models\user','scschoolclassteachersubjects','class_id','teacher_id');//ok
        // return $this->belongsToMany('App\Models\user','scschoolclassteachersubjects','teacher_id','class_id');
        // return $this->belongsToMany('App\Models\scschoolclass','scschoolclassteachersubjects','teacher_id','class_id');

    }
}
