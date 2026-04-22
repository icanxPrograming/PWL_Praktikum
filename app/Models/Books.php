<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Books extends Model
{
    use HasFactory;

    protected $table = 'books';

    protected $fillable = [
        'title',
        'author',
        'year',
        'publisher',
        'city',
        'cover',
        'bookshelf_id',
        'category_id',
    ];

    protected function casts(): array
    {
        return [
            'year' => 'integer',
        ];
    }

    public function bookshelf()
    {
    return $this->belongsTo(Bookshelfs::class, 'bookshelf_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}