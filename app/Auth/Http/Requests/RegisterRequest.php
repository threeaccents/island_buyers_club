<?php namespace TGL\Auth\Http\Requests;

use TGL\Core\Http\Requests\Request;

class RegisterRequest extends Request
{
    /*
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
    public function rules()
    {
        return [
            'username' => 'required:unique:users',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required:unique:users',
            'password' => 'required',
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}