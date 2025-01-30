<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    use HasFactory;
    protected $fillable = ['id','nama_product','merk','price','stock'];
    public $timestamp = true; 

    public function order ()
    {
        return $this->hasMany(order::class);
    }
}
