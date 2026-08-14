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
        Schema::create('dossier_medicals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->constrained('users');
            $table->integer('age');
            $table->integer('poids');
            $table->integer('taille');
            $table->enum('groupe_sanguin', ['A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-']);
            //les antecedants medicaux
            $table->boolean('allergie')->default('false');
            $table->boolean('diabete')->default('false');
            $table->boolean('hta')->default('false');
            $table->boolean('asthme')->default('false');
            $table->boolean('drepanocytose')->default('false');
            $table->boolean('hepatite')->default('false');
            $table->boolean('pathologie')->default('false');

            //le mode de vie
            $table->boolean('alcool')->default('false');
            $table->boolean('tabac')->default('false');
            $table->boolean('sport')->default('false');
            $table->time('temps_de_sommeil');
            $table->string('stress');
            $table->string('alimentation');
            $table->string('condition_de_vie');
            //observation chez la femme
            $table->boolean('menopause')->default('false');
            $table->boolean('grossesse')->default('false');
            $table->boolean('contraception')->default('false');
            $table->boolean('allaitement')->default('false');
            $table->integer('nombre_grosesse');
            $table->integer('nombre_enfant');
            $table->boolean('accouchement_voiebasse')->default('false');
            $table->boolean('accouchement_cesarienne')->default('false');
            $table->boolean('avortement_provoquer')->default('false');
            $table->boolean('avortementspontanne')->default('false');

            //antecedants familiaux
            $table->boolean('maladie_parentale')->default('false');





            $table->enum('sexe', ['masculin', 'feminin']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dossier_medicals');
    }
};
