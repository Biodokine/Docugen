<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modele extends Model
{
    use HasFactory;
    public function fields()
    {
        return $this->belongsTo(Field::class, 'field_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_model', 'model_id', 'user_id');
    }
}
