<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['first_name','last_name','email','student_number','class_id','status','date_of_birth'];
    public function classes(){
        return $this->belongsTo(classes::class);
    }
}
