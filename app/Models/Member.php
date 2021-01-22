<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $fillable = ['id_member','nama_pemilik','no_kendaraan','jenis_kendaraan','tanggal_aktif'];
    protected $table = 'members';
    public $timestamps = false;
}
