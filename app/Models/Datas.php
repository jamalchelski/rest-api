<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datas extends Model
{
    use HasFactory;
    protected $guarded = [];

    // protected $hidden = ['created_at', 'updated_at'];

    // protected $fillable = ['suhu_in', 'suhu_out', 'kelembaban_out'];

    // public function datas()
    // {
    //     return $this->belongsTo(Datas::class);
    // }
}
