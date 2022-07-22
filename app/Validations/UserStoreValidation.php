<?php

namespace App\Validations;

class UserStoreValidation extends Validation
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
			'email' 			=> 'required|email|unique:users',
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
			'name.required' 		=> lang('validations.name_required'),
			'email.required' 		=> lang('validations.email_required'),
			'email.email' 			=> lang('validations.email_email'),
			'email.unique' 			=> lang('validations.email_unique'),
			'password.required' 	=> lang('validations.password_required'),
			'password.min'			=> lang('validations.password_min'),
			'confirm_password.same' => lang('validations.password_same')
		];
	}
}
