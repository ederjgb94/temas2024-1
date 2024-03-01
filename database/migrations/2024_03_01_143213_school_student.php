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
        //se pone school_student porque laravel los necesita de forma singular
        //si pones schools_students no va a encontrar esa tabla
        Schema::create('school_student', function (Blueprint $table) {
            $table->foreignId('school_id')->constrained();
            $table->foreignId('student_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('school_students', function (Blueprint $table) {
            $table->dropForeign(['school_id']);
            $table->dropForeign(['student_id']);
        });
    }
};
