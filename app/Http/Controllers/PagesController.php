<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Employees;

use DB;
class PagesController extends Controller
{
    
    public function index()
    {
        

        $employees = Employees::all();

        //return $aData;

        return view('pages.home', compact('employees'));
    }

    public function about()
    {
        //send data to view file
        $aData = [
            'title' => 'About',
            'first' => 'Roel',
            'last' => 'Dingle',
            'number' => 5
        ];

        return view('pages.about', $aData);
    }

  
}