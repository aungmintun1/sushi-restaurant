<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('role_user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('role_id')->unsigned()->index();
            $table->bigInteger('user_id')->unsigned()->index();
            $table->timestamps();
        });

        Schema::table('role_user', function (Blueprint $table) {
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            // we establish a relationship with Roles and Users through role_users table. note that there is no model for this.
            //role_id connects to id of roles and user_id connects to id of users

            //foreign refers to the column in the table itself, references is the column in the table that we reference, on is the foreign table, 
            //onDelete eliminates the relationships after deletion
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('role_user');
    }
};
