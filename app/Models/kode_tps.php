<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kode_tps extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'tps',
        'kode_tps'
    ];

    //saya bikin
    public function pemilihs()
    {
        return $this->hasMany(Pemilihs::class, 'kode_tps', 'id');
    }
}
