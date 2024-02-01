<?php

namespace App\Models;

use App\Traits\HasImages;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pokemon extends Model
{
    use HasFactory, HasImages;

    protected $guarded = ['id'];

    protected $table = 'pokemons';

    public function location(): BelongsTo
    {
        return $this->belongsTo(Location::class);
    }

    public function abilities(): HasMany
    {
        return $this->hasMany(Ability::class);
    }
}
