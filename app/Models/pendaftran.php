<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pendaftaran extends Model
{
    use HasFactory;


    protected $visible=['tgl','nik','gender','tgl_lahir','alamat','no_hp'];

    //memberikan akses dat apa saja yang bisa diisi
    protected $fillable=['nama','nik','gender','tgl_lahir','alamat','no_hp'];

    //mencatat waktu pembuatan dan update data otomatis
    public $timestamps=true;

    //membuat relasi one to many
    public function pendaftarns()
    {
        //data model "pasien" bisa memiliki banyak data
        //data model "pendaftaran" melalui fk "id_pasien"
        $this->hasMany('App\Models\Pendaftaran','id_pasien');
    }
}
