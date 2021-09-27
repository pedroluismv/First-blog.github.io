<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug'];

    // metodo para cammbiar el id por el slug en la url
    public function getRouteKeyName()
    {
        return 'slug';
    }

    // Relacion uno a muchos
    public function posts()
    {
        return $this->hasMany('App\Models\Post');
    }
}
