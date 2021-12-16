<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Dad extends Model
{
    use HasFactory;

    public function children(): HasMany
    {
        return $this->hasMany(Child::class);
    }

    public function habits(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Habit::class);
    }
}
