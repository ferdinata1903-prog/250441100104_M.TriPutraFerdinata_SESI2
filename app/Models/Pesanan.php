<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    protected $table = 'pesanans';

    protected $fillable = ['menu_id', 'nama_pelanggan', 'nomor_meja','jumlah','total_harga','status'];

    public function Menu()
    {
        return $this->belongsTo(Menu::class);
    }
}
