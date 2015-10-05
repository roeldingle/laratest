<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateEmployeesRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'fname' => 'required|min:2',
            'lname' => 'required|min:2',
            'department_id' => 'required',
            'email' => 'required|email'
        ];
    }
}
