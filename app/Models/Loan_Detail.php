<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Loan_Detail extends Model
{
    use HasFactory;

    protected $table = 'loan_detail';

    protected $fillable = [
        'loan_id',
        'book_id',
        'is_return',
    ];

    protected function casts(): array
    {
        return [
            'is_return' => 'boolean',
        ];
    }

    public function loan()
    {
        return $this->belongsTo(Loans::class);
    }

    public function book()
    {
        return $this->belongsTo(Books::class);
    }
}