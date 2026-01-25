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
        Schema::create('payments', function(Blueprint $table){
            $table->id('payment_id');
            $table->timestamps();
            $table->string('payment_status')->default('none');
            $table->foreignId('category_id')->constrained('payment_categories', 'payment_category_id');
            $table->foreignId('job_id')->constrained('job', 'job_id');
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
