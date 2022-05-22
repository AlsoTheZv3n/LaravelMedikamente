<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EffectType extends Model
{
    use HasFactory;

    protected $table = 'EffectType';

    protected $primaryKey = 'id';

    public function effects()
    {
        return $this->hasMany(Effect::class);
    }
}
