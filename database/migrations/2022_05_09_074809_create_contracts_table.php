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
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
             $table->foreignId('investor_id')->constrained();
             $table->foreignId('project_id')->constrained();
             $table->foreignId('uploader_id')->constrained('users');
             $table->foreignId('modified_by')->constrained('users')->nullable();

             $table->string('receipt_attachments');
             $table->unsignedInteger('amount');
             $table->date('start_date');
             $table->date('end_date');
             $table->boolean('status')->default(true)->comment('active=true,false=terminated');
             $table->string('contract_attachments');
             $table->tinyInteger('roi_period');

             $table->date('terminated_on')->nullable();
             $table->string('termination_description')->nullable();

             $table->string('additional_description')->nullable();
             $table->string('additional_attachments')->nullable();


            $table->softDeletes();
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
        Schema::dropIfExists('contracts');
    }
};
