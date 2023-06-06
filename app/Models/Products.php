<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Filters\Filterable;

class Products extends Model
{
    use HasFactory, Filterable;

    protected $fillable = [
      'id',
      'price'
    ];

    protected $attributes = [
        'prefixes' => '{
            "new": true,
            "hot": false,
            "sale": false,
            "discount": false
        }'
    ];


    public function category(){
        return $this->belongsTo(Categories::class,'category_id','id');
    }




}
