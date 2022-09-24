<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pemilihs extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'id_nfc',
        'nama_pemilih',
        'address',
        'gender',
        'no_tps'
    ];

    public function hasils()
    {
        return $this->hasMany(Hasils::class, 'pemilih_id', 'id');
    }

    //saya bikin
    public function kode_tps()
    {
        return $this->hasOne(kode_tps::class, 'kode_tps', 'id');
    }
}
