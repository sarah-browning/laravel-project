<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "items";
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
    
    public function category() {
        return $this->hasOne('App\Category', 'id', 'category_id');
    }
}
