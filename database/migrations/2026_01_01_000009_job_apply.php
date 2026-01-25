<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('job_applied', function(Blueprint $table){
            $table->id('applied_id');
            $table->string('applied_status')->default('available');
            $table->timestamps();
            $table->foreignId('caregiver_id')->constrained('caregiver', 'caregiver_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
