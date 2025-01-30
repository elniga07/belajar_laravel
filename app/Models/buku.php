<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    use HasFactory;
    protected $fillable = ['id','nama_buku','harga','stock','id_penerbit','tanggal_terbit','id_genre'];
    public $timestamp = true; 

    public function deleteImage(){
        if ($this->cover && file_exists(public_path('image/produk'. $this->cover))) {
            return unlink(public_path('image/produk'. $this->cover));
        }
    }

    public function penerbit()
    {
        return $this->belongsTo(penerbit::class, 'id_penerbit');
    }
    public function genre()
    {
        return $this->belongsTo(genre::class, 'id_genre');
    }
    
    public function transaksi ()
    {
        return $this->hasMany(transaksi::class);
    }
}
