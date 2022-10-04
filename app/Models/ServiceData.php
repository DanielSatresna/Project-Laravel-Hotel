<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceData extends Model
{
    use HasFactory;
    protected $table='service_data';
    protected  $fillable = ['judul', 'deskripsi', 'image'];
}

