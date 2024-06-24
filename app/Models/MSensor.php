<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Msensor extends Model
{
    use HasFactory;

    protected $table = "tb_sensor";
    protected $primarykey = "id";
    protected $fillable = ['NO2_Masuk, CO_Masuk, NO2_Keluar, CO_Keluar, Air'];
}
