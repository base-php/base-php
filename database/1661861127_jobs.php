<?php

$schema['default']->dropIfExists('jobs');

$schema['default']->create('jobs', function ($table) {
	$table->id();
    $table->string('queue');
    $table->text('payload');
    $table->integer('attempts');
    $table->integer('date_reserve');
    $table->integer('date_create');
});
