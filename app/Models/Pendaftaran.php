<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;
    protected $table ='pendaftaran';

    //jika value tidak ada maka akan kosong
    // protected $guarded = [];
}
