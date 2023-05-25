<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;
    protected $table ='pendaftaran';
    protected $primaryKey = 'id';
    protected $fillable = ['name','role','password','email','telp','address','foto'];
    
    // protected $role= where('column','value yg diinginkan')::count();
    
    //jika value tidak ada maka akan kosong
    // protected $guarded = [];
}
