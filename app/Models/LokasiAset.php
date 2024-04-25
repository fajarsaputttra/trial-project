<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LokasiAset extends Model
{
    use HasFactory;
    protected $primaryKey = 'IDLokasi';
    protected $table = 'lokasiaset';
    protected $guarded = [];
}
