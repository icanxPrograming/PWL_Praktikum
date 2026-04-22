<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Loans extends Model
{
    use HasFactory;

    protected $table = 'loans';

    protected $fillable = [
        'user_npm',
        'loan_at',
        'return_at',
    ];

    protected function casts(): array
    {
        return [
            'loan_at' => 'date',
            'return_at' => 'date',
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_npm', 'npm');
    }
}