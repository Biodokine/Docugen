<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Modele;
use App\Models\Field;

class ModelesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Création de 20 fausses données pour la table models
        Modele::factory()->count(20)->create()->each(function ($model) {
            // Sélectionner un field_id aléatoire parmi les IDs disponibles dans la table fields
            $field = Field::inRandomOrder()->first();
            // Associer le field_id au modèle
            $model->field_id = $field->id;
            $model->save();
        });

    }
}
