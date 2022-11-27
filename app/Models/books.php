<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    use HasFactory;
    public function categories()
    {
        return $this->belongsToMany(categories::class, 'books_categories');
    }

    public function publishers()
    {
        return $this->belongsTo(publishers::class, 'publishers_id');
    }
}
