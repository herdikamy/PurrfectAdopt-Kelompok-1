<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kucing extends Model
{
    use HasFactory;
    protected $table = 'kucings';
    protected $fillable = [
        'nama', 'warna', 'ras', 'gender', 'berat_badan', 'tinggi_badan',
        'kesehatan', 'sikap', 'foto', 'video', 'status'];
}
