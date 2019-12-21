<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'results';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['school_id', 'student_id', 'result_type', 'year_received', 'description', 'file', 'status'];

    protected $casts = [
        //
    ];

    /**
     * Get the school associated with the result.
     */
    public function school()
    {
        return $this->belongsTo('App\School');
    }

    /**
     * Get the student associated with the result.
     */
    public function student()
    {
        return $this->belongsTo('App\Student');
    }

    /**
     * Get the request messages of the result.
     */
    public function request_messages()
    {
        return $this->hasManys('App\RequestMessage');
    }
}
