<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Company extends Model
{
    use HasFactory;

    protected $table = 'companies';

    protected $fillable = [
        'title',
        'address',
        'description',
        'number_staff'
    ];

    public function accounts(): HasMany
    {
        return $this->hasMany(Account::class);
    }
}
