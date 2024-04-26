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
                $table->string('title')->unique();
                $table->text('content');
                $table->timestamps();
                $table->softDeletes();
    
                $table->unsignedBigInteger('category_id');  
                $table->unsignedBigInteger('user_id');
                $table->index('category_id','post_category_idx');
                $table->foreign('category_id','post_category_fk')->on('categories')->references('id');
                $table->foreign('user_id','post_user_fk')->on('users')->references('id');
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
