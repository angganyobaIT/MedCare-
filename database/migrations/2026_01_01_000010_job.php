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
        Schema::create('job', function(Blueprint $table){
            $table->id('job_id');
            $table->string('title');
            $table->string('picture');
            $table->integer('salary');
            $table->text('description');
            $table->string('status')->default('show');
            $table->integer('review_rating')->default(0);
            $table->timestamps();
            $table->foreignId('account_id')->constrained('accounts','account_id');
            $table->foreignId('city_id')->constrained('cities', 'city_id');
            $table->foreignId('category_id')->constrained('job_categories', 'job_category_id');

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
