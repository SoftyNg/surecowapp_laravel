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
        //
        schema::create('users_table', function(Blueprint $table){
            $table->id();
            $table->string('name');
            $table->string('email')->unique();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        schema::dropIfExists('users_table');
    }
};
