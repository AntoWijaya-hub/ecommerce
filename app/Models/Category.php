<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    Protected $fillable = ['name'];
    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
