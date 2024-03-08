<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tambahKuis extends Model
{
    use HasFactory;
    protected $table = 'tambahkuis';
    protected $primaryKey = 'id_tambahKuis';
    protected $guarded = [];


    public function pertanyaan() {
        return $this->hasMany(pertanyaan::class, 'id_tambahKuis', 'id_tambahKuis');
    }
}
