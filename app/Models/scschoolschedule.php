<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class scschoolschedule extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function mycts(){
        return $this->belongsTo('App\Models\scschoolclassteachersubject','scschoolclassteachersubject_id','id');
    }

    // public function myclasses(){
    //     return $this->belongsTo('App\Models\scschoolclass','class_id');
    // }
    // public function mysubjects(){
    //     return $this->belongsTo('App\Models\scschoolsubject','subject_id');
    // }
    // public function myteachers(){
    //     return $this->belongsTo('App\Models\User','teacher_id');
    // }
    // public function mystudents(){
    //     return $this->hasMany('App\Models\user','class_id','class_id');
    // }
}
