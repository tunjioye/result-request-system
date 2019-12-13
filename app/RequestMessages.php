<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequestMessages extends Model
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
    protected $fillable = ['request_id', 'requester_id', 'school_id', 'student_id', 'result_id', 'message', 'from', 'to', 'attachments'];

    protected $casts = [
        //
    ];
}
