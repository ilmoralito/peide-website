<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->text('description');
            $table->string('image')->unique();
            $table->boolean('is_published')->default(false);
            $table->decimal('price', 5, 2);
            $table->string('address')->default('UCC, Campus León');
            $table->double('latitude', 10, 7)->nullable()->default(12.418568);
            $table->double('longitude', 10, 7)->nullable()->default(-86.877374);
            $table->integer('user_id');
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
        Schema::dropIfExists('events');
    }
}
