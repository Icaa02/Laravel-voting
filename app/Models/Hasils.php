<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hasils extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'kandidat_id',
        'pemilih_id'
    ];

    public function kandidats()
    {
        return $this->hasOne(Kandidats::class, 'kandidat_id', 'id');
    }

    public function pemilihs()
    {
        return $this->hasOne(Pemilihs::class, 'pemilih_id', 'id');
    }
}
