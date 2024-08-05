<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class postmodel extends Model
{
   protected $fillable=['title','imagePath','description'];
}
