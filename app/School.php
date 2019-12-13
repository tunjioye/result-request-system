<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'schools';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['school_name', 'school_address', 'contact_name', 'contact_role', 'contact_email', 'contact_visibility'];

    protected $casts = [
        'contact_visibility' => 'boolean'
    ];
}
