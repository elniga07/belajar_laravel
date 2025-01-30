<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $fillable = ['id','quantity','order_date'];
    public $timestamp = true; 

    public function product()
    {
        return $this->belongsTo(product::class, 'id_product');
    }
    public function customer()
    {
        return $this->belongsTo(customer::class, 'id_customer');
    }
}
