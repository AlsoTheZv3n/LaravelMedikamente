<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Effect extends Model
{
    use HasFactory;

    protected $table = 'effects';

    protected $primaryKey = 'id';

    public function drugs()
    {
        return $this->belongsTo(Drug::class);
    }
    


}
