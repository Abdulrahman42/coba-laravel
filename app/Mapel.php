<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    protected $table = 'mapel';
    protected $fillable = ['kode', 'nama', 'semester'];

    public function mahasiswa()
    {
        return $this->belongsToMany(Mahasiswa::class)->withPivot(['nilai']);
    }
}
