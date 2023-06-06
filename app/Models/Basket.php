<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Filters\Filterable;

class Basket extends Model
{
    use HasFactory;


    public function product(){
        return $this->belongsTo(Products::class,'products_id','id');
    }
    public function products(){
        return $this->hasMany(Products::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    protected $guarded = false;
}
