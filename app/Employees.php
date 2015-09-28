<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    
    //set permission to edit the following fields *refresh php artisan tinker
    protected $fillable = [
    	'department_id',
    	'fname',
        'lname',
        'email'
    ];
}
