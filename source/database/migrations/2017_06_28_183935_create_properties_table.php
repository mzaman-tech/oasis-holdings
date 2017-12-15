<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->increments('id');
            $table->string('thumbnail');
            $table->string('project_name');
            $table->text('description');
            $table->text('location');
            $table->string('land_area');
            $table->string('architect');
            $table->string('rajuk_approval');
            $table->string('land_orientation');
            $table->string('front_road');
            $table->string('no_of_apartments');
            $table->string('size_of_units');
            $table->string('total_build_area');
            $table->string('no_of_carparking');
            $table->text('amenities');
            $table->enum('project_status', ['upcoming', 'ongoing', 'completed']);
            $table->tinyIinteger('is_featured')->default(0);
            $table->integer('created_by');
            $table->integer('updated_by');
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
        Schema::dropIfExists('properties');
    }
}
