<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Project extends Model
{
    use HasFactory;

    protected $casts = [
        'expected_delivery_date' => 'date',
        'delivery_date' => 'date',
    ];

    public function feeProposal(): HasOne
    {
        return $this->hasOne(FeeProposal::class);
    }

    public function contacts(): HasMany
    {
        return $this->hasMany(ProjectContact::class);
    }
}
