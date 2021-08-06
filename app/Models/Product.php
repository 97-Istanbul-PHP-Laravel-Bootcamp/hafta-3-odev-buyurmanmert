<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $primaryKey = 'product_id';
    
    protected $fillable = ['product_title','product_description', 'product_prc', 'product_cid', 'product_unicode', 'product_status', 'product_order', 'product_slug'];
}
