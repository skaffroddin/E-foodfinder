<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->string('name'); // Name column
            $table->string('email')->unique(); // Email column (unique)
            $table->string('phone_number'); // Phone number column
            $table->date('date_of_birth'); // Date of birth column
            $table->string('profile_photo')->nullable(); // Profile photo (nullable)
            $table->string('state'); // State column
            $table->string('country'); // Country column
            $table->enum('gender', ['male', 'female', 'other']); // Gender column (enum)
            $table->timestamp('email_verified_at')->nullable(); // Email verification timestamp (nullable)
            $table->string('password'); // Password column
            $table->rememberToken(); // Token for "remember me" functionality
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    public function down()
    {
        Schema::dropIfExists('users'); // Drops the users table if migration is rolled back
    }
}
