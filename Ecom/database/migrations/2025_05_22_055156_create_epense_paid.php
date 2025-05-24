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
        Schema::create('epense_paid', function (Blueprint $table) {
            $table->id('paidId');
            $table->Integer('expenseId');
            $table->Integer('uid');
            $table->Float('amount');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('epense_paid');
    }
};
