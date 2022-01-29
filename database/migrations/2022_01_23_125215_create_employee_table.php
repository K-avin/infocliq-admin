<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('nic_number')->unique();
            $table->string('mobile_number');
            $table->string('provence');
            $table->string('district');
            $table->string('city');
            $table->string('address');
            $table->string('gender');
            $table->string('image');           
            $table->string('status');
            $table->string('date_of_birth');
            $table->string('designation');
            $table->string('department');
            $table->string('employment_status');
            $table->string('start_date');
            $table->decimal('salary',7,2);
            $table->string('bank');
            $table->string('branch');
            $table->string('account_name');
            $table->string('account_number')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee');
    }
}
