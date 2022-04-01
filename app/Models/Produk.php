<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    /* public function cart() {
        return $this->belongsTo(Cart::class, 'produk_id');
    } */

    protected $fillable = [
        'nama_produk',
        'harga_produk',
        'stok_produk',
        'deskripsi_produk',
        'img_produk',
    ];
}
