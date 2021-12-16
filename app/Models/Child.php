<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Child extends Model
{
    use HasFactory;

    public function dad(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Dad::class);
    }

    public function toys(): \Illuminate\Database\Eloquent\Builder
    {
        return $this->hasMany(Toy::class)->where('broken_at', null);
    }


}
