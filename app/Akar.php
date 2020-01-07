<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Akar extends Model
{
    protected $table ="akar";

    protected $fillable =[
        'name', 'price', 'type', 'squer', 'bu_type', 'description' ,'user_id', 'image' ,
    ];

    public function getfeatruedAttribute($image)
    {
        return asset($image);
    }
}
