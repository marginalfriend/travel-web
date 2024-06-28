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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
						$table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
						$table->foreignId('destination_id')->constrained('destinations')->cascadeOnDelete();
						$table->integer('adult_visitor');
						$table->integer('child_visitor');
						$table->date('visit_date');
						$table->boolean('is_paid');
            $table->timestamps('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
