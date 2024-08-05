<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class caurosel extends Model
{
    use HasFactory;

    protected $table = 'caurosel'; 

    protected $fillable = [ 'imagePath','title', 'description'];

}

