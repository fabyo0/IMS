<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investors', function (Blueprint $table) {
            $table->id();
            $table->string('investor_name');
            $table->string('residence_area');
            $table->string('phone_number');
            $table->string('email');
            $table->date('dob');
            $table->string('image_path')->nullable();
            $table->string('id_path');

            $table->string('account_name');
            $table->string('account_number');
            $table->string('bank_name');

            $table->string('nxt_kin_name');
            $table->string('nxt_kin_relationship');
            $table->string('nxt_kin_phone');
            $table->string('nxt_kin_id_path')->nullable();

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
        Schema::dropIfExists('investors');
    }
};
