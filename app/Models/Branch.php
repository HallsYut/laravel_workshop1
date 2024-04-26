<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Branch extends Model
{
    use HasFactory;
    protected $table = 'branches';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name','staff_id',
    ];
    public function staff(): HasMany
    {
        return $this->hasMany(Staff::class);
    }
}
