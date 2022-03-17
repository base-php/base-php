<?php

$schema['default']->dropIfExists('notifications');

$schema['default']->create('notifications', function ($table) {
	$table->id();
    $table->string('type');
    $table->text('data');
	$table->datetime('date_read')->nullable();
    $table->datetime('date_create')->useCurrent();
	$table->datetime('date_update')->useCurrent()->setCurrentOnUpdate();
});
