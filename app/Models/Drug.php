<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drug extends Model
{
    use HasFactory;

    protected $table = 'Drugs';

    protected $primaryKey = 'id';

    public function effects()
    {
        return $this->hasMany(Effect::class);
    }

    public function symptoms()
    {
        return $this->hasMany(Symptom::class);
    }

    public function pharmas()
    {
        return $this->belongsTo(Pharma::class);
    }

}
