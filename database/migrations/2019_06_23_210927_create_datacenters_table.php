<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatacentersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datacenters', function (Blueprint $table) {
            $table->Increments('id');
            $table->text('host');
            $table->text('ip');
            $table->text('equipo');
            $table->text('marca');
            $table->text('modelo');
            $table->text('serie');
			$table->text('site');
            $table->text('fase');
            $table->text('pod');
            $table->text('rack');
            $table->text('ur');
            $table->text('fuente');
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
        Schema::dropIfExists('datacenters');
    }
}
