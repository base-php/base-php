<?php

use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        $this->schema->create('users', function ($table) {
            $table->id();
            $table->string('photo')->nullable();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('oauth')->nullable();
            $table->string('hash')->nullable()->unique();
            $table->string('two_fa')->nullable();
            $table->datetime('date_create')->useCurrent();
            $table->datetime('date_update')->useCurrent()->setCurrentOnUpdate();
        });

        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => '21232f297a57a5a743894a0e4a801fc3',
            'hash' => 'c4ca4238a0b923820dcc509a6f75849b',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        $this->schema->dropIfExists('users');
    }
};
