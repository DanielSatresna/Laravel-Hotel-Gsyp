<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataReservasi extends Model
{
    use HasFactory;
    protected $table = 'data_reservasis';
    protected $fillable = ['name', 'tipekamar', 'email', 'nik', 'cekin', 'cekout', 'jumlahkamar'];

}
