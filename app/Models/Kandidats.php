<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class Kandidats extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'nama_kandidat',
        'no_urut',
        'visi_misi',
        'url',
    ];

    public function AllData()
    {
        return DB::table('kandidats')->get();
    }

    public function hasils()
    {
        return $this->hasMany(Hasils::class, 'kandidat_id', 'id');
    }

    public function getUrlAttribute($url)
    {
        return config('app.url') . Storage::url($url);
    }
}
