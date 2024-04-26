<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Activity extends Model
{
    use HasFactory;
    protected $table = 'activities';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
    ];
    public function gadget(): HasMany
    {
        return $this->hasMany(Gadget::class);
    }
}
