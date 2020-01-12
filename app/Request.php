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
    protected $fillable = ['requester_id', 'school_id', 'student_id', 'tracking_number', 'result_type', 'year_received', 'purpose', 'status'];

    protected $casts = [
        //
    ];

    public static function statusClass($requestSattus) {
        switch ($requestSattus) {
            case 'REJECTED':
                return 'text-danger';
                break;

            case 'SUCCESS':
                return 'text-success';
                break;

            case 'PENDING':
            default:
                return 'text-secondary';
                break;
        }
    }

    /**
     * Get the requester of the request.
     */
    public function requester()
    {
        return $this->belongsTo('App\Requester');
    }

    /**
     * Get the school associated with the request.
     */
    public function school()
    {
        return $this->belongsTo('App\School');
    }

    /**
     * Get the student associated with the request.
     */
    public function student()
    {
        return $this->belongsTo('App\Student');
    }

    /**
     * Get the request messages of the request.
     */
    public function request_messages()
    {
        return $this->hasManys('App\RequestMessage');
    }
}
