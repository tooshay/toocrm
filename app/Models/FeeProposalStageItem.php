<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class FeeProposalStageItem extends Model
{
    use HasFactory;

    public function resource(): HasMany
    {
        return $this->hasMany(FeeProposalStageItemResource::class);
    }

    public function feeProposalStage(): BelongsTo
    {
        return $this->belongsTo(FeeProposalStage::class);
    }
}
