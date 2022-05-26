<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\Hasfactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
  use Hasfactory;
    protected $table = 'books';
    protected $fillable = ['images','name','author','isbn_number'];
}
