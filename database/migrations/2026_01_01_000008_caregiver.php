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
        Schema::create('caregiver', function(Blueprint $table){
            $table->id('caregiver_id');
            $table->string('name');
            $table->text('address');
            $table->string('photo');
            $table->boolean('is_verified')->default(false);
            $table->string('status')->default('ready');
            $table->timestamps();
            $table->foreignId('account_id')->constrained('accounts', 'account_id');
            $table->foreignId('category_id')->constrained('caregiver_categories', 'caregiver_category_id');
            $table->foreignId('education_id')->constrained('education', 'education_id');
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
