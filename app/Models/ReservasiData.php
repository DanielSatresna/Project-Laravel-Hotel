<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservasiData extends Model
{
    use HasFactory;
    protected $table="reservasi_data";
    protected $fillable = ['nama', 'typekamar', 'nik', 'email', 'cekin', 'cekout', 'jumlah'];
}
