<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TokenType extends Model
{
    use HasFactory;

    protected $table = 'token_types';

    protected $fillable = [
        'type',
        'service_id'
    ];

    public function tokens(): HasMany
    {
        return $this->hasMany(Token::class);
    }

    public function apiService(): BelongsTo
    {
        return $this->belongsTo(ApiService::class);
    }
}
