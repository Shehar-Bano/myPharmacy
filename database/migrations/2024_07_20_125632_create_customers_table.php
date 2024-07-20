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
        Schema::create('customers', function (Blueprint $table) {

$table->id();
$table->string('name');
$table->string('email')->unique();
$table->string('phone');
$table->string('address')->nullable();
$table->unsignedBigInteger('item_id');
$table->foreign('item_id')->references('id')->on('medicines')->onDelete('cascade');
$table->string('purchaced_qty');
$table->string('amount');
$table->enum('status',['active','inactive'])->default('inactive');
$table->string('description');
$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
