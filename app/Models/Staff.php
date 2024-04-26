<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Staff extends Model
{
    use HasFactory;
    protected $table = 'staffs';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'age',
        'email',
        'position',
    ];
    public function skill(): HasMany
    {
        return $this->hasMany(Skill::class);
    }
    public function branch(): BelongsTo
    {
        return $this->belongsTo(branch::class);
    }
    public function telephone(): HasMany
    {
        return $this->hasMany(Telephone::class);
    }
}
