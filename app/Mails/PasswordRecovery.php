<?php

namespace App\Mails;

class PasswordRecovery extends Mail
{
	/**
	 * Set from for email.
	 * 
	 * @var string $from
	 */
	public $from = 'info@base.com';

	/**
	 * Set subject for email.
	 * 
	 * @var string $subject
	 */
	public $subject = 'Recuperación de contraseña de Base PHP';

	/**
	 * Set attach for email.
	 * 
	 * @var array $attach
	 */
	public $attach = [];

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
     * @return $this
     */
	public function build()
	{
		return view('recover', ['user' => $this->user]);
	}
}
