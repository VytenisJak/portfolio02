<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;
class goods extends Model
{
    public $timestamps = false;
    
    use Sortable;
    public $sortable = ['id', 'title', 'description', 'image_url', 'status_id',
                        'image_url', 'status_id', 'price', 'category'];
                        use HasFactory;
}