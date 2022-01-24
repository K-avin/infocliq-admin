<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project', function (Blueprint $table) {
            $table->id();
            $table->string('client_name');
            $table->string('mobile');
            $table->string('company_name');
            $table->string('address');
            $table->text('client_description');
            $table->string('project_name');
            $table->string('due_date');
            $table->decimal('total_cost',7,2);
            $table->string('total_hours');
            $table->string('status')->default('pending');
            $table->string('doc_link');
            $table->json('developers');
            $table->string('project_description');       
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
        Schema::dropIfExists('project');
    }
}
