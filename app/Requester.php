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
    protected $fillable = ['type', 'organisation_name', 'organisation_address', 'contact_name', 'contact_role', 'contact_number', 'contact_email', 'contact_visibility'];

    protected $casts = [
        'contact_visibility' => 'boolean'
    ];
}
