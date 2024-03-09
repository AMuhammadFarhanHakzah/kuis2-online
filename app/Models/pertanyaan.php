<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pertanyaan extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_pertanyaan';
    protected $table = 'pertanyaan';
    protected $guarded = [];

    public function tambahKuis() {
        return $this->belongsTo(tambahKuis::class, 'id_tambahKuis');
    }

    public function jawaban() {
        return $this->hasMany(jawaban::class, 'id_pertanyaan', 'id_pertanyaan');
    }

}
