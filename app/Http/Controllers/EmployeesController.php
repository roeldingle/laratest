<?php

namespace App\Http\Controllers;


use App\Employees;
use App\Departments;
use Carbon\Carbon;
use App\Http\Requests;
use App\Http\Requests\EmployeesRequest;
use App\Http\Controllers\Controller;
use DB;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $employees = DB::table('employees')
            ->select('employees.id',
                'employees.department_id',
                'employees.fname',
                'employees.lname',
                'employees.email',
                'departments.department_name'
                )
            ->join('departments','employees.department_id','=','departments.id')
            ->orderBy('employees.id','ASC')
            ->get();


        return view('pages.listEmployees', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $departments = Departments::lists('department_name', 'id');
        return view('pages.createEmployee', compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(EmployeesRequest $request)
    {
        $input = $request->all();
        Employees::create($input);

        return redirect('employees');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {

        $employee = Employees::findOrFail($id);
        $employee_department = Departments::findOrFail($employee->department_id);
        $employee->department_name = $employee_department->department_name;

        return view('pages.showEmployee', compact('employee'));
    }

    public function edit($id)
    {
        $employee = Employees::findOrFail($id);
        $departments = Departments::lists('department_name', 'id');
        return view('pages.editEmployee', compact('employee', 'departments'));

    }

    public function update($id, EmployeesRequest $request)
    {
        $employee = Employees::findOrFail($id);

        $employee->update($request->all());

        return redirect('employees');

    }
  
}
