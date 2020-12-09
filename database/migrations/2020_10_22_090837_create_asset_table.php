<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assets', function (Blueprint $table) {
            $table->increments('id');
            $table->text('asset_id')->nullable();
            $table->text('location')->nullable();
            $table->text('brand_name')->nullable();
            $table->text('serial_no')->nullable();
            $table->integer('template_id')->default(0);
            $table->integer('compliance_status')->default(0);
            $table->integer('registration_status')->default(0);
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
        Schema::dropIfExists('assets');
    }
}
