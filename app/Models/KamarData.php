<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KamarData extends Model
{
    use HasFactory;
    protected $table = "kamar_data";
    protected $fillable = ['typekamar', 'besarkamar', 'ukurankasur', 'fasilitaskamar', 'jumlahruangan', 'image'];
}
