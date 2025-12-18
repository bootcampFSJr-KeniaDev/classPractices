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
        Schema::table('users', function (Blueprint $table) {
            //agregando una nueva columna
            $table->unsignedBigInteger('role_id')->after('id'); //agregando el campo despues del id
            $table->foreign('role_id')->references('id')->on('role');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //eliminamos la columna
            $table->dropForeign(['role_id']);
            $table->dropColumn('role_id');
        });
    }
};
