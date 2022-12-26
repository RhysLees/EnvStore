<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Project extends Model
{
    use HasUuids;
    use HasFactory;

    protected $fillable = [
        'name',
        'status',
    ];

    /**
     * Get the team that owns the Project
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    /**
     * Get all of the values for the Project
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function values(): HasMany
    {
        return $this->hasMany(Value::class);
    }

    // Get the latest value for a given key
    public function getValue(string $key): ?Value
    {
        return $this->values()
            ->where('name', $key)
            ->orderBy('version', 'desc')
            ->first();
    }
}
