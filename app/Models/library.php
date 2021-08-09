<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class library extends Model
{
    use HasFactory;
     protected $fillable=[
         'bookId',
         'authorId',
         'title',
         'ISBN',
         'pub_year',
         'available'
         ];
}
