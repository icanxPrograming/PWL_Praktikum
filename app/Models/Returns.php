<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Returns extends Model
{
    use HasFactory;

    protected $table = 'returns';

    public $timestamps = false;

    protected $fillable = [
        'loan_detail_id',
        'charge',
        'amount',
    ];

    protected function casts(): array
    {
        return [
            'charge' => 'boolean',
            'amount' => 'integer',
        ];
    }

    public function loanDetail()
    {
        return $this->belongsTo(Loan_Detail::class, 'loan_detail_id');
    }
}