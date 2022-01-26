<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaskTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task', function (Blueprint $table) {
            $table->id();
            $table->string('task_name');
            $table->text('description');
            $table->string('task');
            $table->integer('project_id');
            $table->integer('module');
            $table->string('department');
            $table->string('task_type');            
            $table->string('due_date');
            $table->integer('assign_to');
            $table->integer('assign')->default(1);
            $table->integer('duration_minutes');
            $table->string('duration_hours');
            $table->string('priority_level');
            $table->integer('points');
            $table->string('attachment');
            $table->string('note')->default('null');
            $table->string('status')->default('pending');            
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
        Schema::dropIfExists('task');
    }
}
