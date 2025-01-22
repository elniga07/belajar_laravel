<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    use HasFactory;
    protected $fillable = ['id','nama_produk','harga','stock','id_pengguna'];
    public $timestamp = true; 

    public function kategori()
    {
        return $this->belongsTo(kategori::class, 'id_kategori');
    }
}
