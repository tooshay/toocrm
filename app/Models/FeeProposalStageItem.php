<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class FeeProposalStageItem extends Model
{
    use HasFactory;

    public function resource(): HasOne
    {
        return $this->hasOne(FeeProposalStageItemResource::class);
    }

    public function feeProposalStage(): BelongsTo
    {
        return $this->belongsTo(FeeProposalStage::class);
    }
}
