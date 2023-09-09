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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('jobtitle');
            $table->string('positiontitle');
            $table->longText('details')->nullable();
            $table->string('jobmaxsalary');
            $table->string('jobminsalary');
            $table->string('joblocation');
            $table->string('jobtype')->nullable();
            $table->longText('requiredskill')->nullable();
            $table->longText('education')->nullable();
            $table->longText('workexperience')->nullable();
            $table->string('seat');
            $table->string('slug')->unique();
            $table->boolean('status')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
