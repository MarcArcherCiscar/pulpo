<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicios extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['titulo_producto','precio','unidad_medida'];
    protected $table = 'servicios';
}
