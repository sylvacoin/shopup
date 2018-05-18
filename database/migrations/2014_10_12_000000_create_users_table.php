<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('users', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->enum('gender', ['male', 'female']);
			$table->integer('school_id');
			$table->string('address')->nullable();
			$table->string('email')->unique();
			$table->string('password');
			$table->rememberToken();
			$table->integer('role_id');
			$table->string('imgpath')->nullabe();
			$table->boolean('is_approved')->default(false);
			$table->boolean('is_banned')->default(false);
			$table->string('reason')->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('users');
	}
}
