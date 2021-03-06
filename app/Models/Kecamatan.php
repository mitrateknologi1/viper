<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kecamatan extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'kecamatan';

    public function desaKelurahan()
    {
        return $this->hasMany(DesaKelurahan::class, 'kecamatan_id');
    }
}
