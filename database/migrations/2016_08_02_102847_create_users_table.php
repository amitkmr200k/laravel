<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('is_admin')->default(0);
            $table->boolean('is_active')->default(0);
            $table->string('user_name', 100);
            $table->string('email', 100);
            $table->string('password', 200);
            $table->string('activation_code', 100);
            $table->string('first_name', 100);
            $table->string('middle_name', 100);
            $table->string('last_name', 100);
            $table->string('gender', 5);
            $table->date('dob');
            $table->integer('age')->unsigned();
            $table->string('marital_status', 10);
            $table->string('employment', 3);
            $table->string('employer', 100);
            $table->string('residence_street', 100);
            $table->string('residence_city', 100);
            $table->string('residence_state', 100);

            $table->string('residence_pincode', 6);
            $table->string('residence_contact_no', 10);
            $table->string('residence_fax_no', 10);

            $table->string('permanent_street', 100);
            $table->string('permanent_city', 100);
            $table->string('permanent_state', 100);

            $table->string('permanent_pincode', 6);
            $table->string('permanent_contact_no', 10);
            $table->string('permanent_fax_no', 10);

            $table->string('image', 200);
            $table->string('comment', 500);
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
