<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'requests';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['request_id', 'requester_id', 'school_id', 'student_id', 'year_received', 'result_type', 'purpose', 'status'];

    protected $casts = [
        //
    ];
}
