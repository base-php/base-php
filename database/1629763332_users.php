<?php

$schema->dropIfExists('users');

$schema->create('users', function ($table) {
	$table->id();
	$table->string('photo')->nullable();
	$table->string('name');
	$table->string('email')->unique();
	$table->string('password');
	$table->string('role')->nullable();
	$table->text('permissions')->nullable();
	$table->string('oauth')->nullable();
	$table->string('hash')->nullable();
	$table->datetime('date_create')->useCurrent();
	$table->datetime('date_update')->useCurrent()->seCurrentOnUpdate();
});
