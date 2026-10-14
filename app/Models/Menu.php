<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $table = 'menus';

    protected $fillable = ['menu_id', 'jenis', 'harga'];

    public function Pesanan()
    {
        return $this->hasMany(Pesanan::class);
    }
}
