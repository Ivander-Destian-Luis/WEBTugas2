<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class anggota_ukm_model extends Model
{
    use HasFactory;
    protected $table = 'anggota_ukm';

    protected $fillable= ['npm', 'nama', 'jenis_kelamin', 'tanggal_lahir', 'tempat_lahir'];

    protected $primarykey = 'npm';

    public $incrementing = false;

    protected $keyType = 'string';
}
