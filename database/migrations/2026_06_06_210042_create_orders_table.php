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

            $table->foreignId('user_id')
                  ->nullable()
                  ->constrained()
                  ->nullOnDelete();

            $table->string('customer_name');
            $table->string('customer_phone');
            $table->string('customer_city');

            $table->text('customer_address');

            $table->text('note')->nullable();

            $table->decimal('total', 10, 2);

            $table->enum('status', [
                'new',
                'confirmed',
                'shipped',
                'delivered',
                'cancelled'
            ])->default('new');

            $table->longText('whatsapp_message')->nullable();

            $table->timestamps();
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
