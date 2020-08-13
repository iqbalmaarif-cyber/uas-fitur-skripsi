<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class skripsi extends Model
{
    protected $table = 'skripsi';
    protected $fillable =['nim','nama_mahasiswa','judul','tempat_penelitian','alamat'];
}