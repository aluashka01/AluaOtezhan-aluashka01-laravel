<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Blog;


class Blog extends Model
{
    use HasFactory;
    protected $table = "blog";
    protected $fillable =['name','surname','age'];
}
