<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public $fillable = ['title',
                        'item_number',
                        'ean',
                        'active',
                        'price',
                        'cost_price',
                        'offer_price',
                        'teaser',
                        'description',
                        'inventory',
                        'image',
                        'brand_id',
                        'category_id'];
}
