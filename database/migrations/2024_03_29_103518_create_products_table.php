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
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('productName');
            $table->string('height')->default(0);
            $table->integer('weight')->default(0);
            $table->string('gender')->nullable();
            $table->date('dob')->nullable();
            $table->string('category')->nullable();
            $table->json('imgs')->nullable();
            //SStatus 1 = Available, 2 = Reserved, 3 = rehomed
            $table->integer('status')->default(1);
            $table->string('description');

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
