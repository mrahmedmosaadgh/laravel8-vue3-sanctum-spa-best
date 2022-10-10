<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class scschoolWeeklyCalssRecord extends Model
{
    use HasFactory;
    protected $guarded = [];

    // myschool
    // myteacher
    // mystudent
    // myclass
    // mysubject

    public function myschool()
    {
        return $this->hasOne('App\Models\User','id','school_id');
    }


    public function myteacher()
    {
        return $this->hasOne('App\Models\User','id','teacher_id');
    }

    public function mystudent()
    {
        return $this->hasOne('App\Models\User','id','student_id');
    }

    public function myclass()
    {
        return $this->hasOne('App\Models\scschoolclass','id','class_id');
    }


    public function mysubject()
    {
        return $this->hasOne('App\Models\scschoolsubject','id','subject_id');
    }



}
