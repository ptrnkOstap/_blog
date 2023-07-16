<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    use HasFactory, HasUlids;

    protected $table = 'products';

    protected $fillable = [
        'name',
        'description',
        'attachemnts',
        'isActive',
    ];

    protected $hidden = [
        'id'
    ];

    public function product_type(): HasOne
    {
        return $this->hasOne(Product_type::class);
    }
}
