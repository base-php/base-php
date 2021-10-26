<?php

namespace App\Validations;

class UserStore extends Validation
{
	/**
	* Get the validation rules that apply to the request.
	*
	* @return array
	*/
	public function rules(): array
	{
		return [
			'name' 				=> 'required',
			'email' 			=> 'required|email|unique:User',
			'password' 			=> 'required|min:8',
			'confirm_password' 	=> 'same:password'
		];
	}

	/**
	 * Get the error messages for the defined validation rules.
	 *
	 * @return array
	 */
	public function messages(): array
	{
		return [
			'name.required' 		=> __('validations.name_required'),
			'email.required' 		=> __('validations.email_required'),
			'email.email' 			=> __('validations.email_email'),
			'email.unique' 			=> __('validations.email_unique'),
			'password.required' 	=> __('validations.password_required'),
			'password.min'			=> __('validations.password_min'),
			'confirm_password.same' => __('validations.password_same')
		];
	}
}
