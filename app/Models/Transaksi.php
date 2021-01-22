<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $fillable = ['kode','id_member','no_kendaraan','jenis_kendaraan','tanggal','status'];
    protected $table = 'transaksi';
    public $timestamps = false;

}
