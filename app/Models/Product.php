<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $casts = [
        'attribute' => 'array'
    ];

    public function setAttributeAttribute($values)
    {
        $attribute = [];
        // dd($values);
        foreach ($values as $value) {
            if (!is_null($value['key'])) {
                $attribute[] = $value;
            }
        }
        $this->attributes['attribute'] = json_encode($attribute);
    }
}
