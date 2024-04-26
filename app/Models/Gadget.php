<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Gadget extends Model
{
    use HasFactory;
    protected $table = 'gadgets';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'activity_id',
    ];
    public function activity(): BelongsTo
    {
        return $this->belongsTo(activity::class);
    }
}
