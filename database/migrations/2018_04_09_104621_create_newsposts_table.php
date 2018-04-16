<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewspostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newsposts', function (Blueprint $table) {
			$table->text('title');
			$table->text('category');
			$table->text('description');
			$table->text('reporter');
			$table->timestamp('date')->nullable();
			$table->string('avatar')->default('default.jpg');
            $table->increments('id');
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
        Schema::dropIfExists('newsposts');
    }
}
