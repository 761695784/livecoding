<?php

use App\Models\User;
use App\Models\Livre;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('emprunts', function (Blueprint $table) {
            $table->id();
            $table->foreignIdfor(User::class)->onDelete('cascade');
            $table->foreignIdfor(Livre::class)->onDelete('cascade');
            $table->date('date_Emprunt');
            $table->date('date_RetourPrevue')->nullable();
            $table->date('date_Reelle');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emprunts');
    }
};
