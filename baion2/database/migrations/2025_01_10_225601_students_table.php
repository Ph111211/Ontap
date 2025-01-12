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
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id')->primary();
            $table->char('first_name',50);
            $table->char('last_name',50);
            $table->char('email',100);
            $table->char('student_number',20);
            $table->unsignedBigInteger('class_id');
            $table->enum('status',['Trial','Enrolled','Dropped']);
            $table->date('date_of_birth');



            

            $table->timestamps();
            $table->foreign('class_id')->references('id')->on('class')->onDelete('cascade');
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
