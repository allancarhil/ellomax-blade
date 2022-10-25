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
            $table->string('main_image');
            $table->string('images')->nullable()->default(null);
            $table->string('doc');
            $table->string('segment_id');
            $table->string('occupation');
            $table->string('cpf_user');
            $table->foreign('cpf_user')->references('cpf')->on('users');
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
