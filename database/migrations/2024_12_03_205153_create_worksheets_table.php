<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('worksheets', function (Blueprint $table) {
            $table->id();
            $table->string('vahed');
            $table->string('shoghl');
            $table->string('name');
            $table->string('sath_shghl')->nullable();
            $table->string('image');
            $table->unsignedBigInteger('khatarat_id');
            $table->foreign('khatarat_id')->references('id')->on('items');
            $table->string('payamadha');
            $table->integer('firstRisk_num_shedat');
            $table->integer('firstRisk_num_ehtemal');
            $table->integer('firstRisk_num_risk');
            $table->string('controls');
            $table->integer('sathRisk_num_shedat');
            $table->integer('sathRisk_num_ehtemal');
            $table->integer('sathRisk_num_risk');
            $table->string('rahkar');
            $table->string('masool_eghdam');
            $table->timestamps();
        });

        Schema::create('worksheet_educations', function (Blueprint $table) {
            $table->foreignId('worksheet_id')->nullable()->index();
            $table->unsignedBigInteger('education_id');
            $table->foreign('education_id')->references('id')->on('items');
        });

        Schema::create('worksheet_equipments', function (Blueprint $table) {
            $table->foreignId('worksheet_id')->nullable()->index();
            $table->unsignedBigInteger('equipment_id');
            $table->foreign('equipment_id')->references('id')->on('items');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('worksheets');
        Schema::dropIfExists('worksheet_educations');
        Schema::dropIfExists('worksheet_equipments');
    }
};
