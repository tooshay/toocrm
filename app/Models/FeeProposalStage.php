<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FeeProposalStage extends Model
{
    use HasFactory;

    public function FeeProposal(): BelongsTo
    {
        return $this->belongsTo(FeeProposal::class);
    }
}
