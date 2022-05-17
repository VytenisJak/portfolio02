<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    public $timestamps = false;
    public function categorygoods() {
        return $this->hasMany(goods::class, 'category_id', 'id');
    }
    use HasFactory;
}
