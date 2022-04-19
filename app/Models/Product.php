<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'collection_id',
        'name',
        'slug',
        'description',
        'main_image',
        'hover_image',
    ];

    public function collection(){
        return $this->belongsTo(Collection::class);
    }
}
