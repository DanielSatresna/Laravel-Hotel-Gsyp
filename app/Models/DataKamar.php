<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKamar extends Model
{
    use HasFactory;
    protected $table = "data_kamars";
    protected $fillable = ['tipekamar', 'besarkamar', 'fasilitaskamar', 'jumlahkamar', 'image'];
}
