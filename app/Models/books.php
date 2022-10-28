<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'ISBN',
        'revision_number',
        'publisher',
        'publish_date',
        'author',
        'coverpage_image',
        'genre',
    ];
}
