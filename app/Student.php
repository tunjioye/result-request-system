<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'students';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['school_id', 'matric_number', 'first_name', 'last_name', 'graduation_year', 'gender', 'email_address', 'phone_number'];

    protected $casts = [
        //
    ];

    /**
     * Get the school of the student.
     */
    public function school()
    {
        return $this->belongsTo('App\School');
    }

    /**
     * Get the requests of the school.
     */
    public function requests()
    {
        return $this->hasManys('App\Request');
    }

    /**
     * Get the results of the student.
     */
    public function results()
    {
        return $this->hasManys('App\Result');
    }
}
