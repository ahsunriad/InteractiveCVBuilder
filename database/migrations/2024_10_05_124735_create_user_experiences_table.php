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
        Schema::create('user_experiences', function (Blueprint $table) {
            $table->bigincrements('id');
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Foreign key to users table
            $table->string('job_title');
            $table->string('company_name');
            $table->string('company_location');
            $table->string('start_date');
            $table->string('end_date');
            $table->longText('experience_summery');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_experiences');
    }
};
