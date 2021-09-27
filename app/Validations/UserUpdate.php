<?php

namespace App\Validations;

class UserUpdate extends Validation
{
	/**
	* Get the validation rules that apply to the request.
	*
	* @return array
	*/
	public function rules()
	{
		return [
			'name' 				=> 'required',
			'email' 			=> 'required|email|unique:User',
			'confirm_password' 	=> 'same:password'
		];
	}

	/**
	 * Get the error messages for the defined validation rules.
	 *
	 * @return array
	 */
	public function messages()
	{
		return [
			'name.required' 		=> __('validations.name_required'),
			'email.required' 		=> __('validations.email_required'),
			'email.email' 			=> __('validations.email_email'),
			'email.unique' 			=> __('validations.email_unique'),
			'confirm_password.same' => __('validations.password_same')
		];
	}
}
