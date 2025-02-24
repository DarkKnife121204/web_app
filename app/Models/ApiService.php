<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ApiService extends Model
{
    use HasFactory;

    protected $table = 'api_services';

    protected $fillable = [
        'name'
    ];

    public function tokenType(): HasOne
    {
        return $this->hasOne(TokenType::class);
    }
}
