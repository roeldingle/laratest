<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departments extends Model
{
    //
    //set permission to edit the following fields *refresh php artisan tinker
    protected $fillable = [
    	'department_name',
        'description',
    ];
}
