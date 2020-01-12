<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requester extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'requesters';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['requester_type', 'requester_name', 'requester_address', 'contact_name', 'contact_role', 'contact_email', 'contact_number', 'contact_visibility'];

    protected $casts = [
        'contact_visibility' => 'boolean'
    ];

    /**
     * Get the requests of the requester.
     */
    public function requests()
    {
        return $this->hasMany('App\Request');
    }
}
