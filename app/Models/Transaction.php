<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Transaction extends Model
{
    use HasFactory;

    protected $casts = [
        'message'              => 'array',
        'message_deserialized' => 'array',
    ];

    public function block(): BelongsTo
    {
        return $this->belongsTo(Block::class);
    }

    public function metadata(): HasMany
    {
        return $this->hasMany(TransactionMetadata::class);
    }

    public function receipt(): HasOne
    {
        return $this->hasOne(TransactionReceipt::class);
    }

    public function sender(): BelongsTo
    {
        return $this
            ->belongsTo(Account::class)
            ->where('sender', $this->sender);
    }

    public function recipient(): BelongsTo
    {
        return $this
            ->belongsTo(Account::class)
            ->where('recipient', $this->recipient);
    }
}
