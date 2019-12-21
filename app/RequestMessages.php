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
    protected $fillable = ['request_id', 'result_id', 'message', 'from', 'to', 'attachments', 'read_at'];

    protected $casts = [
        //
    ];

    /**
     * Get the request of the request messages.
     */
    public function request()
    {
        return $this->belongsTo('App\Request');
    }

    /**
     * Get the result associated with the request messages.
     */
    public function result()
    {
        return $this->belongsTo('App\Result');
    }
}
