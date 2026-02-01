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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('content');
            $table->foreignId('user_id')->references('id')->on('users')->cascadeOnDelete('cascade');
            $table->timestamps();
            //references =មកពី table នៅក្នុង database
            //cascadeOnDelete = នៅពេលដែលយើងលុប user ឡើងវិញនៅក្នុង database គឺនិយមន័យដែលយើងលុបពី user នៅក្នុង database
            //foreignId = មកពី table នៅក្នុង database 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
