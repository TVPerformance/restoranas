<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rest extends Model
{
    use HasFactory;
    public function restDish(){
        return $this->hasMany(Dish::class, 'rest_id', 'id');
    }

    
}
