<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Account extends Model
{
    use HasFactory;

    protected $casts = [
        'balances'        => 'array',
        'locked_balances' => 'array',
        'stakes'          => 'array',
        'metadata'        => 'array',
        'validator'       => 'array',
    ];

    public function metadata(): HasMany
    {
        return $this->hasMany(AccountMetadata::class);
    }

    public function incomingTransactions(): HasMany
    {
        return $this
            ->hasMany(Transaction::class)
            ->where('recipient', $this->address);
    }

    public function outgoingTransactions(): HasMany
    {
        return $this
            ->hasMany(Transaction::class)
            ->where('sender', $this->public_key);
    }
}
