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
			'email' 			=> 'required|email|unique:users',
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
			'name.required' 		=> 'El campo nombre es obligatorio',
			'email.required' 		=> 'El campo correo electrónico es obligatorio',
			'email.email' 			=> 'Debe ingresar un correo electrónico válido',
			'email.unique' 			=> 'Este correo electrónico ya se encuentra registrado',
			'confirm_password.same' => 'Las contraseñas no coinciden'
		];
	}
}
