<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
        // Let's get the route param by name to get the User object value
        $user = request()->route('user');

    

        if($this->get('password')){
            return [
                'name' => 'required',
                'email' => 'required|email:rfc,dns|unique:users,email,'.$user->id,
                'username' => 'required|unique:users,username,'.$user->id,
                'password'=>'required|min:8|confirmed',
            'password_confirmation'=>'required'
            ];
           }else{
            return [
                'name' => 'required',
                'email' => 'required|email:rfc,dns|unique:users,email,'.$user->id,
                'username' => 'required|unique:users,username,'.$user->id
            ];
           }
       
    }
}
