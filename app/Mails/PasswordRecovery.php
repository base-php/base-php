<?php

namespace App\Mails;

use View;

class PasswordRecovery extends Mail
{
	/**
	 * Set from for email.
	 * 
	 * @var string $from
	 */
	public string $from = 'info@base.com';

	/**
	 * Set subject for email.
	 * 
	 * @var string $subject
	 */
	public string $subject = 'Recuperación de contraseña de Base PHP';

	/**
	 * Set attach for email.
	 * 
	 * @var array $attach
	 */
	public array $attach = [];

	/**
     * Create a email instance.
     *
     * @return void
     */
	public function __construct($user)
	{
		$this->user = $user;
	}

	/**
     * Build the email.
     *
     * @return View
     */
	public function build(): View
	{
		return view('recover', ['user' => $this->user]);
	}
}
