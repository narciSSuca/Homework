<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable =[
      'id',
      'title',
      'publish_date',
      'content',
      'created_at',
      'updated_at'
    ];
}
