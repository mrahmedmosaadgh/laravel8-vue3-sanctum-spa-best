<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class scschoolclassteachersubject extends Model
{
    use HasFactory;
    protected $guarded = [];
// ->with('myclasses')
// ->with('mysubjects')
// ->with('myteachers')
// ->with('mystudents')
// ->with('myschedules')

    // 'myclasses',
    // 'mysubjects',
    // 'myteachers',
    // 'mystudents',
    // 'myschedules',

    public function myclasses(){
        return $this->belongsTo('App\Models\scschoolclass','class_id');
    }
    public function mysubjects(){
        return $this->belongsTo('App\Models\scschoolsubject','subject_id');
    }
    public function myteachers(){
        return $this->belongsTo('App\Models\User','teacher_id');
    }

    public function mystudents(){
        return $this->hasMany('App\Models\user','class_id','class_id');
    }
    public function myschedules(){
        return $this->hasMany('App\Models\scschoolschedule','scschoolclassteachersubject_id');
        // return $this->hasMany('App\Models\scschoolschedule','id','scschoolclassteachersubject_id');
    }
    public function mycontrolmarks(){
        return $this->hasMany('App\Models\Controlmark','class_id','class_id');
        // return $this->hasMany('App\Models\scschoolschedule','id','scschoolclassteachersubject_id');
    }
}
