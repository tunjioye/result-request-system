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
    protected $fillable = ['school_id', 'student_id', 'year_received', 'result_type', 'description', 'file', 'status'];

    protected $casts = [
        //
    ];
}
