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
    protected $fillable = ['matric_number', 'first_name', 'last_name', 'graduation_year', 'gender', 'email_address', 'phone_number'];

    protected $casts = [
        //
    ];
}
