<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminHomeworksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_homeworks', function (Blueprint $table) {
            $table->id();
            $table->string('data');
            $table->string('class');
            $table->text('name');
            $table->text('description');
            $table->text('link_test')->nullable(true);
            $table->text('link_lesson')->nullable(true);
            $table->text('documents')->nullable(true);
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
        Schema::dropIfExists('admin_homeworks');
    }
}
