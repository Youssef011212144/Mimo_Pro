<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table = 'carts'; // Replace 'your_table_name' with the actual table name
    protected $fillable = ['product_title', 'quantity', 'price']; 


}
