<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bookshelfs extends Model
{
    use HasFactory;

    protected $table = 'bookshelfs';

    public $timestamps = false;

    protected $fillable = [
        'code',
        'name',
    ];

    public function books()
    {
    return $this->hasMany(Books::class, 'bookshelf_id');
    }
}