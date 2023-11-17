<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
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
            'role_id' => 'required',
            'name' => 'required',
            'address' => 'required',
            'birth_date' => 'required|date|before_or_equal:today',
            'gender' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'qualification' => 'nullable',
            'username' => 'required',
            'password' => 'required',
        ];
    }
}
