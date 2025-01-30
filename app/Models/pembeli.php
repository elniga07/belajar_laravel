<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembeli extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'nama_pembeli','jenis_kelamin','telpon'];
    public $timestamp = true;

    public function transaksi ()
    {
        return $this->hasMany(transaksi::class);
    }
}
