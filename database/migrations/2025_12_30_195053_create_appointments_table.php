<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->string('patient_email');
            $table->date('appointment_date');
            $table->enum('request_status', ['Requested', 'Approved', 'Denied'])->default('Requested');
            $table->text('appointment_details')->nullable();
            $table->enum('patient_status', ['New', 'Returning']);
            $table->timestamps();

            $table->foreign('patient_email')
                ->references('email')->on('patients')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
