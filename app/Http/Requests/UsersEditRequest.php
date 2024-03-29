<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersEditRequest extends FormRequest
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
            //
            'name'=>'required|string',
            'email'=>'required|email',
            'role_id'=>'required',
            'is_active'=> 'required',
        ];
    }
    public function messages(){
        return[
            'email.required' => 'Email is required',
            'name.required' => 'Name is required',
            'role_id.required'=> 'Role is required',
            'is_active.required'=> 'Status is required',
        ];
    }
}
