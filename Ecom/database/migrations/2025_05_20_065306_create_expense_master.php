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
        Schema::create('expense_master', function (Blueprint $table) {
            $table->id('expenseId');
            $table->String('name');
            $table->String('notes');
            $table->Float('amount');
            $table->String('billImg');
            $table->Integer('createdByUid');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expense_master');
    }
};
