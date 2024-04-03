<?php

namespace App\Models;

use App\Models\Category;
use App\Models\OrderDetail;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'stock',
        'name',
        'description',
        'cost',
        'image',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function orderDetail()
    {
        return $this->hasMany(OrderDetail::class, 'id');
    }
}
