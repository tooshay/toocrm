<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class FeeProposalStage extends Model
{
    use HasFactory;

    protected $casts = [
        'expected_completion_date' => 'date',
        'completed' => 'date',
    ];

    public function FeeProposal(): BelongsTo
    {
        return $this->belongsTo(FeeProposal::class);
    }

    public function items(): HasMany
    {
        return $this->hasMany(FeeProposalStageItem::class);
    }
}
