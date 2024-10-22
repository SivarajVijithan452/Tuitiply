<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('instructors', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID
            $table->string('name'); // Instructor's name
            $table->text('description'); // Description of the instructor
            $table->string('heading'); // Title or heading
            $table->string('cover_pic'); // URL for the cover picture
            $table->string('profile_pic'); // URL for the profile picture
            $table->string('subject'); // Subject taught
            $table->string('curriculum'); // Curriculum type (OL/AL)
            $table->integer('grade'); // Grade level
            $table->string('class_type'); // Class type (In Person/Online)
            $table->decimal('hourly_rate', 8, 2); // Hourly rate
            $table->decimal('rating', 3, 2); // Rating out of 5
            $table->string('location'); // Location of the instructor
            $table->string('region'); // Region (Western, Central, etc.)
            $table->string('classes_offered'); // Types of classes offered
            $table->integer('class_duration'); // Duration of class in minutes
            $table->string('ages_teach'); // Age range taught
            $table->timestamps(); // Created and updated timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('instructors');
    }
};
