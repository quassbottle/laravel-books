<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->integer('author_id');
            $table->integer('book_id');
            $table->float('price');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
