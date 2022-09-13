<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CompanyMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->integer('type');
            $table->integer('status');
            $table->string('companyName');
            $table->string('cnpj');
            $table->string('ownerName');
            $table->string('ownerMail');
            $table->string('price');
            $table->string('video');
            $table->string('img');
            $table->string('doc');
            $table->string('segment_id');
            $table->string('occupation_id');
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
        Schema::dropIfExists('companies');
    }
}
