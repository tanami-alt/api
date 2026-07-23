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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id("id_usuario");
            $table->string("nombre",50);
            $table->string("apellidos",50);
            $table->string("documento",20)->unique();
            $table->integer("edad");
            $table->string("email",200)->unique();
            $table->enum("genero",["masculino","femenino","otro"])->default("otro");
            $table->timestamps();
            $table->softDeletes();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropiIfExists("usuarios");
    }
};
