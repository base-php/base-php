<?php

namespace App\Validations;

class UserUpdateValidation extends Validation
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
			'email' 			=> [
				'required',
				'email',
				Rule::unique('users')->ignore(request('id'))
			],
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
			'confirm_password.same' => lang('validations.password_same')
		];
	}
}
